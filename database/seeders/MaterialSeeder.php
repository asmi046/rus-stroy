<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('materials/gazoblok.webp', file_get_contents(public_path('tmp_data/materials/gazoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/penoblok.webp', file_get_contents(public_path('tmp_data/materials/penoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/arbolit.webp', file_get_contents(public_path('tmp_data/materials/arbolit.jpg')), 'public');
        Storage::disk('public')->put('materials/keramzitoblok.webp', file_get_contents(public_path('tmp_data/materials/keramzitoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/keramoblok.webp', file_get_contents(public_path('tmp_data/materials/keramoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/silikatnyj_blok.webp', file_get_contents(public_path('tmp_data/materials/silikatnyj_blok.jpg')), 'public');
        Storage::disk('public')->put('materials/brus.webp', file_get_contents(public_path('tmp_data/materials/brus.jpg')), 'public');
        Storage::disk('public')->put('materials/profil_brus.webp', file_get_contents(public_path('tmp_data/materials/profil_brus.jpg')), 'public');
        Storage::disk('public')->put('materials/kl_brus.webp', file_get_contents(public_path('tmp_data/materials/kl_brus.jpg')), 'public');

        $data = [
            [
                'title' => "Дома из газоблоков",
                'material_name' => "Газоблок",
                'subtitle' => "Подборка проектов домов которые можно построить из газоблоков",
                'img' => 'materials/gazoblok.webp',
                'slug' => Str::slug("Дома из газоблоков"),
                'order' => 1,
                'start_price' => 1584000.00,
                'description' => "Газоблок — популярный строительный материал для возведения стен и перекрытий, обладающий хорошей теплоизоляцией.",
            ],
            [
                'title' => "Дома из пеноблоков",
                'material_name' => "Пеноблок",
                'subtitle' => "Подборка проектов домов которые можно построить из пеноблоков",
                'img' => 'materials/penoblok.webp',
                'slug' => Str::slug("Дома из пеноблоков"),
                'order' => 2,
                'start_price' => 1584000.00,
                'description' => "Пеноблок — легкий и недорогой материал, используемый для строительства энергоэффективных домов.",
            ],
            [
                'title' => "Дома из арболита",
                'material_name' => "Арболит",
                'subtitle' => "Подборка проектов домов которые можно построить из арболита",
                'img' => 'materials/arbolit.webp',
                'slug' => Str::slug("Дома из арболита"),
                'order' => 3,
                'start_price' => 5984000.00,
                'description' => "Арболит — экологичный материал на основе древесных компонентов, хорошо сохраняет тепло и устойчив к влаге.",
            ],
            [
                'title' => "Дома из керамзитоблока",
                'material_name' => "Керамзитоблок",
                'subtitle' => "Подборка проектов домов которые можно построить из керамзитоблока",
                'img' => 'materials/keramzitoblok.webp',
                'slug' => Str::slug("Дома из керамзитоблока"),
                'order' => 4,
                'start_price' => 1000000.00,
                'description' => "Керамзитоблок — прочный и легкий материал, обладающий хорошей тепло- и звукоизоляцией.",
            ],
            [
                'title' => "Дома из керамоблока",
                'material_name' => "Керамоблок",
                'subtitle' => "Подборка проектов домов которые можно построить из керамоблока",
                'img' => 'materials/keramoblok.webp',
                'slug' => Str::slug("Дома из керамоблока"),
                'order' => 5,
                'start_price' => 6280000.00,
                'description' => "Керамоблок — современный материал с высокой прочностью и отличной теплоизоляцией, подходит для строительства долговечных домов.",
            ],
            [
                'title' => "Дома из силикатного блока",
                'material_name' => "Силикатный блок",
                'subtitle' => "Подборка проектов домов которые можно построить из силикатного блока",
                'img' => 'materials/silikatnyj_blok.webp',
                'slug' => Str::slug("Дома из силикатного блока"),
                'order' => 6,
                'start_price' => 3524000.00,
                'description' => "Силикатный блок — материал с высокой прочностью, используется для строительства надежных и долговечных зданий.",
            ],
            [
                'title' => "Дома из бруса",
                'material_name' => "Брус",
                'subtitle' => "Подборка проектов домов которые можно построить из бруса",
                'img' => 'materials/brus.webp',
                'slug' => Str::slug("Дома из бруса"),
                'order' => 7,
                'start_price' => 1924000.00,
                'description' => "Брус — натуральный материал, обеспечивающий экологичность и комфорт проживания в деревянном доме.",
            ],
            [
                'title' => "Дома из профилированного бруса",
                'material_name' => "Профилированный брус",
                'subtitle' => "Подборка проектов домов которые можно построить из профилированного бруса",
                'img' => 'materials/profil_brus.webp',
                'slug' => Str::slug("Дома из профилированного бруса"),
                'order' => 8,
                'start_price' => 584000.00,
                'description' => "Профилированный брус — материал с точной геометрией, обеспечивает быстрое и качественное строительство деревянных домов.",
            ],

            [
                'title' => "Дома из клееного бруса",
                'material_name' => "Клеенный брус",
                'subtitle' => "Подборка проектов домов которые можно построить из клеенного бруса",
                'img' => 'materials/kl_brus.webp',
                'slug' => Str::slug("Дома из клееного бруса"),
                'order' => 9,
                'start_price' => 6384000.00,
                'description' => null,
            ],
        ];

        foreach ($data as $item) {
            DB::table("materials")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'materials/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['subtitle'],
                ]
            );
        }
    }
}
