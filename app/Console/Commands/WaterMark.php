<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class WaterMark extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parsing:water-mark';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Наложение водяного знака на изображения';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Запрашиваем директорию с фотографиями
        $photoDir = $this->ask('Введите путь к директории с фотографиями', 'public/tmp_data/projects/pr_1');

        // Запрашиваем файл водяного знака
        $watermarkFile = $this->ask('Введите путь к файлу водяного знака', 'public/tmp_data/rs_wm.jpg');

        // Преобразуем пути в абсолютные
        $photoPath = base_path($photoDir);
        $watermarkPath = base_path($watermarkFile);

        // Проверяем существование директории
        if (!File::exists($photoPath) || !File::isDirectory($photoPath)) {
            $this->error("Директория {$photoPath} не существует!");
            return 1;
        }

        // Проверяем существование файла водяного знака
        if (!File::exists($watermarkPath)) {
            $this->error("Файл водяного знака {$watermarkPath} не существует!");
            return 1;
        }

        // Проверяем, что GD расширение доступно
        if (!extension_loaded('gd')) {
            $this->error('PHP расширение GD не установлено!');
            return 1;
        }

        $this->info("Начинаем обработку изображений...");
        $this->info("Директория: {$photoPath}");
        $this->info("Водяной знак: {$watermarkPath}");

        try {
            // Загружаем водяной знак
            $watermark = $this->loadImage($watermarkPath);
            if (!$watermark) {
                $this->error("Не удалось загрузить водяной знак!");
                return 1;
            }

            $watermarkWidth = imagesx($watermark);
            $watermarkHeight = imagesy($watermark);

            // Получаем список изображений
            $imageFiles = $this->getImageFiles($photoPath);

            if (empty($imageFiles)) {
                $this->warn("В директории не найдено изображений для обработки!");
                return 0;
            }

            $processed = 0;
            $errors = 0;

            foreach ($imageFiles as $imageFile) {
                $this->line("Обрабатываем: " . basename($imageFile));

                try {
                    // Загружаем основное изображение
                    $image = $this->loadImage($imageFile);
                    if (!$image) {
                        $this->warn("Не удалось загрузить изображение: " . basename($imageFile));
                        $errors++;
                        continue;
                    }

                    $imageWidth = imagesx($image);
                    $imageHeight = imagesy($image);

                    // Вычисляем позицию для правого нижнего угла
                    $watermarkX = $imageWidth - $watermarkWidth;
                    $watermarkY = $imageHeight - $watermarkHeight;

                    // Накладываем водяной знак
                    imagecopy($image, $watermark, $watermarkX, $watermarkY, 0, 0, $watermarkWidth, $watermarkHeight);

                    // Сохраняем изображение
                    if ($this->saveImage($image, $imageFile)) {
                        $processed++;
                        $this->info("✓ Обработано: " . basename($imageFile));
                    } else {
                        $this->warn("Не удалось сохранить: " . basename($imageFile));
                        $errors++;
                    }

                    // Освобождаем память
                    imagedestroy($image);

                } catch (\Exception $e) {
                    $this->error("Ошибка при обработке " . basename($imageFile) . ": " . $e->getMessage());
                    $errors++;
                }
            }

            // Освобождаем память от водяного знака
            imagedestroy($watermark);

            $this->info("\n" . str_repeat('=', 50));
            $this->info("Обработка завершена!");
            $this->info("Обработано успешно: {$processed}");
            if ($errors > 0) {
                $this->warn("Ошибок: {$errors}");
            }

        } catch (\Exception $e) {
            $this->error("Критическая ошибка: " . $e->getMessage());
            return 1;
        }

        return 0;
    }

    /**
     * Загружает изображение из файла
     */
    private function loadImage($path)
    {
        $imageInfo = getimagesize($path);
        if (!$imageInfo) {
            return false;
        }

        switch ($imageInfo[2]) {
            case IMAGETYPE_JPEG:
                return imagecreatefromjpeg($path);
            case IMAGETYPE_PNG:
                return imagecreatefrompng($path);
            case IMAGETYPE_WEBP:
                return imagecreatefromwebp($path);
            default:
                return false;
        }
    }

    /**
     * Сохраняет изображение в файл
     */
    private function saveImage($image, $path)
    {
        $imageInfo = getimagesize($path);
        if (!$imageInfo) {
            return false;
        }

        switch ($imageInfo[2]) {
            case IMAGETYPE_JPEG:
                return imagejpeg($image, $path, 70); // Качество 70%
            case IMAGETYPE_PNG:
                return imagepng($image, $path, 1); // Сжатие 1 (лучшее качество)
            case IMAGETYPE_WEBP:
                return imagewebp($image, $path, 70); // Качество 70%
            default:
                return false;
        }
    }

    /**
     * Получает список файлов изображений в директории
     */
    private function getImageFiles($directory)
    {
        $files = File::files($directory);
        $imageFiles = [];

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                $imageFiles[] = $file->getPathname();
            }
        }

        return $imageFiles;
    }
}
