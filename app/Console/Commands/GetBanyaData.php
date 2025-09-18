<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use DOMDocument;
use DOMXPath;

class GetBanyaData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parsing:get-banya-data';

    protected $headers = [
                'accept'                    => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
                'accept-language'           => 'ru,ru-RU;q=0.9,en-US;q=0.8,en;q=0.7',
                'cache-control'             => 'max-age=0',
                'priority'                  => 'u=0, i',
                'referer'                   => 'https://papa-dom.com/projects',
                'sec-ch-ua'                 => '"Not)A;Brand";v="8", "Chromium";v="138", "Google Chrome";v="138"',
                'sec-ch-ua-mobile'          => '?0',
                'sec-ch-ua-platform'        => '"Windows"',
                'sec-fetch-dest'            => 'document',
                'sec-fetch-mode'            => 'navigate',
                'sec-fetch-site'            => 'same-origin',
                'sec-fetch-user'            => '?1',
                'upgrade-insecure-requests' => '1',
                'user-agent'                => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
                'cookie'                    => 'PHPSESSID=45910c149e715ebf06467aaea2369d10; utm=%5B%5D; _ym_uid=1752232413306896531; _ym_d=1752232413; beget=begetok; cted=modId%3D7tsdz5hl%3Bya_client_id%3D1752232413306896531; _ym_isad=1; _ym_visorc=w'
    ];
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Парсинг данных домов с внешнего сайта';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Запрашиваем URL страницы
        $url = $this->ask('Введите адрес ссылки на страницу проекта',"https://stroy-dom86.ru/building/3570");

        // Запрашиваем номер проекта
        $projectNumber = $this->ask('Введите номер проекта', 2);

        if (!$url || !$projectNumber) {
            $this->error('URL и номер проекта обязательны для заполнения!');
            return 1;
        }

        $this->info("Начинаем парсинг проекта #{$projectNumber} с URL: {$url}");

        try {
            // Создаем директорию для проекта
            $projectDir = public_path("tmp_data/projects/pr_{$projectNumber}");
            if (!File::exists($projectDir)) {
                File::makeDirectory($projectDir, 0755, true);
                $this->info("Создана директория: {$projectDir}");
            }

            // Получаем содержимое страницы
            $this->info('Получаем содержимое страницы...');
            $response = Http::withHeaders($this->headers)->get($url);

            if (!$response->successful()) {
                $this->error('Не удалось получить содержимое страницы');
                return 1;
            }

            $html = $response->body();

            // Парсим HTML
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();

            $xpath = new DOMXPath($dom);

            // Заголовок из h1
            $h1Elements = $dom->getElementsByTagName('h1');
            $title = $h1Elements->length > 0 ? trim($h1Elements->item(0)->textContent) : '';
            $slug = Str::slug($title);

            // Галерея: ссылки из <a> внутри блока wrap__current-plan
            $galleryLinks = $xpath->query('//div[contains(@class,"wrap__current-plan")]//a');
            $gallery = [];
            $photoCounter = 1;
            foreach ($galleryLinks as $link) {
                if ($link->hasAttribute('href')) {
                    $imageUrl = $link->getAttribute('href');
                    $extension = pathinfo($imageUrl, PATHINFO_EXTENSION);
                    $fileName = "p{$projectNumber}_photo_{$photoCounter}.{$extension}";
                    $filePath = "{$projectDir}/{$fileName}";
                    try {
                        $imageResponse = Http::withHeaders($this->headers)->get($imageUrl);
                        if ($imageResponse->successful()) {
                            File::put($filePath, $imageResponse->body());
                            $gallery[] = "/tmp_data/projects/pr_{$projectNumber}/{$fileName}";
                            $photoCounter++;
                        }
                    } catch (\Exception $e) {
                        $this->warn("Не удалось скачать изображение: {$imageUrl}");
                    }
                }
            }

            // Описание: из блока, удаляя h2 с текстом "Описание проекта"
            $descNode = $xpath->query('/html/body/div[1]/section[2]/div/div[2]/div[1]/div[4]');
            $descHtml = '';
            if ($descNode->length) {
                $descDom = new DOMDocument();
                libxml_use_internal_errors(true);
                $descDom->loadHTML($xpath->document->saveHTML($descNode->item(0)));
                libxml_clear_errors();
                foreach ($descDom->getElementsByTagName('h2') as $h2) {
                    if (trim($h2->textContent) === 'Описание проекта') {
                        $h2->parentNode->removeChild($h2);
                    }
                }
                $descHtml = $descDom->saveHTML();
            }

            // Параметры: floors, total_area, wall_material, plan_dimensions из блока
            $paramsNode = $xpath->query('/html/body/div[1]/section[2]/div/div[2]/div[1]/div[3]');
            $floors = $total_area = $wall_material = $plan_dimensions = '';
            if ($paramsNode->length) {
                $specItems = $xpath->query('.//div[contains(@class,"specifications-item")]', $paramsNode->item(0));
                foreach ($specItems as $item) {
                    $nameNode = $xpath->query('.//div[contains(@class,"specifications-item__name")]', $item);
                    $valueNode = $xpath->query('.//div[contains(@class,"specifications-item__value")]', $item);
                    if ($nameNode->length && $valueNode->length) {
                        $name = trim($nameNode->item(0)->textContent);
                        $value = trim($valueNode->item(0)->textContent);
                        if ($name === 'Кол-во этажей') {
                            $floors = (int)preg_replace('/[^\d]/', '', $value);
                        }
                        if ($name === 'Общая площадь') {
                            $total_area = (float)str_replace([',', 'м²', 'м2', ' '], ['.', '', '', ''], $value);
                        }
                        if ($name === 'Материал стен') {
                            $wall_material = mb_ucfirst($value);
                        }
                        if ($name === 'Габариты для плана') {
                            $plan_dimensions = str_replace(' ', '', $value);
                        }

                        if ($name === 'Пристройка для плана') {
                            $plan_extension = $value;
                        }
                    }
                }
            }

            // Создаем пустой файл ds.html
            $dsFilePath = "{$projectDir}/ds.html";
            File::put($dsFilePath, '');
            $this->info('Создан файл ds.html');

            // Получаем начальную цену
            $startPriceNode = $xpath->query('/html/body/div[1]/section[2]/div/div[2]/div[2]/div[2]/div/div[2]/div[1]/div[3]/span[1]');
            $start_price = '';
            if ($startPriceNode->length) {
                $start_price = trim($startPriceNode->item(0)->textContent);
                $start_price = str_replace([' ', 'руб.', 'руб'], '', $start_price);
            }

            // Формируем массив данных
            $projectData = [
                'title' => $title,
                'img' => !empty($gallery) ? $gallery[0] : '',
                'slug' => $slug,
                'start_price' => $start_price,
                'description' => "file_get_contents(public_path('/tmp_data/projects/pr_{$projectNumber}/ds.html'))",
                'gallery' => $gallery,
                'layout' => [],
                'type' => 'Гараж',
                'floors' => $floors,
                'total_area' => $total_area,
                'wall_material' => ucfirst($wall_material),
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => str_replace('м', '', $plan_dimensions),
                'extension' => $plan_extension ?? null,
            ];

            // Выводим результат
            $this->info("\n" . str_repeat('=', 50));
            $this->info('РЕЗУЛЬТАТ ПАРСИНГА:');
            $this->info(str_repeat('=', 50));

            $this->line($this->formatArrayOutput($projectData));
// dd($projectData);
            $this->info(str_repeat('=', 50));
            $this->info("Парсинг завершен успешно!");
            $this->info("Скачано изображений: " . count($gallery));
            $this->info("Директория проекта: {$projectDir}");

        } catch (\Exception $e) {
            $this->error("Ошибка при парсинге: " . $e->getMessage());
            return 1;
        }

        return 0;
    }

    /**
     * Форматирует массив для вывода в удобном для копирования виде
     */
    private function formatArrayOutput(array $data): string
    {
        $output = "[\n";

        foreach ($data as $key => $value) {
            $output .= "    '". str_replace(["\r",'"'],"",$key) ."' => ";

            if (is_array($value)) {
                if (empty($value)) {
                    $output .= "[]";
                } else {
                    $output .= "[\n";
                    foreach ($value as $item) {
                        $output .= "        ['img' => '{$item}'],\n";
                    }
                    $output .= "    ]";
                }
            } elseif (is_string($value)) {
                if (str_starts_with($value, 'file_get_contents')) {
                    $output .= $value;
                } else {
                    $output .= "'". str_replace(["\r",'"'],"",$value)."'";
                }
            } elseif (is_numeric($value)) {
                $output .= $value;
            } elseif (is_bool($value)) {
                $output .= $value ? 'true' : 'false';
            } else {
                $output .= "null";
            }

            $output .= ",\n";
        }

        $output .= "],";

        return $output;
    }
}
