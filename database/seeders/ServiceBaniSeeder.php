<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceBaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_16_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_16/s_16_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_16_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_16/s_16_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_16_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_16/s_16_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_16_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_16/s_16_gal_4.jpg')), 'public');
        Storage::disk('public')->put("service/bani_d_16_2.webp", file_get_contents(public_path('tmp_data/serv/s_16/bani_d_16_2.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_16_3.webp", file_get_contents(public_path('tmp_data/serv/s_16/bani_d_16_3.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_16_4.webp", file_get_contents(public_path('tmp_data/serv/s_16/bani_d_16_4.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_16_5.webp", file_get_contents(public_path('tmp_data/serv/s_16/bani_d_16_5.webp')), 'public');

        Storage::disk('public')->put("service/s_17_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_17/s_17_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_17_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_17/s_17_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_17_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_17/s_17_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_17_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_17/s_17_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_17_1.webp", file_get_contents(public_path('tmp_data/serv/s_17/bani_d_17_1.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_17_2.webp", file_get_contents(public_path('tmp_data/serv/s_17/bani_d_17_2.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_17_3.webp", file_get_contents(public_path('tmp_data/serv/s_17/bani_d_17_3.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_17_4.webp", file_get_contents(public_path('tmp_data/serv/s_17/bani_d_17_4.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_17_5.webp", file_get_contents(public_path('tmp_data/serv/s_17/bani_d_17_5.webp')), 'public');

        Storage::disk('public')->put("service/s_18_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_18/s_18_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_18_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_18/s_18_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_18_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_18/s_18_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_18_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_18/s_18_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_18_2.webp", file_get_contents(public_path('tmp_data/serv/s_18/bani_d_18_2.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_18_3.webp", file_get_contents(public_path('tmp_data/serv/s_18/bani_d_18_3.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_18_4.webp", file_get_contents(public_path('tmp_data/serv/s_18/bani_d_18_4.webp')), 'public');
        Storage::disk('public')->put("service/bani_d_18_5.webp", file_get_contents(public_path('tmp_data/serv/s_18/bani_d_18_5.webp')), 'public');

        $data = [

            [
                'title' => "Строительство бань из бревна в [city|pp]",
                'group' => 'Бани',
                'template' => null,
                'order' => 1,
                'img' => 'service/s_16_gal_1.jpg',
                'slug'=> Str::slug("Строительство бань из бревна"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_16/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_16/main.html')),
                'gallery' => json_encode([
                    'service/s_16_gal_2.jpg',
                    'service/s_16_gal_3.jpg',
                    'service/s_16_gal_4.jpg',
                    "service/bani_d_16_2.webp",
                    "service/bani_d_16_3.webp",
                    "service/bani_d_16_4.webp",
                    "service/bani_d_16_5.webp",
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство бань из бруса в [city|pp]",
                'group' => 'Бани',
                'template' => null,
                'order' => 1000,
                'img' => 'service/s_17_gal_1.webp',
                'slug'=> Str::slug("Строительство бань из бруса"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_17/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_17/main.html')),
                'gallery' => json_encode([
                    'service/s_17_gal_2.jpg',
                    'service/s_17_gal_3.webp',
                    'service/s_17_gal_4.webp',
                    "service/bani_d_17_1.webp",
                    "service/bani_d_17_2.webp",
                    "service/bani_d_17_3.webp",
                    "service/bani_d_17_4.webp",
                    "service/bani_d_17_5.webp",
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство бань из пеноблока в [city|pp]",
                'group' => 'Бани',
                'template' => null,
                'order' => 1000,
                'img' => 'service/s_18_gal_1.jpg',
                'slug'=> Str::slug("Строительство бань из пеноблока"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_18/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_18/main.html')),
                'gallery' => json_encode([
                    'service/s_18_gal_2.webp',
                    'service/s_18_gal_3.jpg',
                    'service/s_18_gal_4.webp',
                    "service/bani_d_18_2.webp",
                    "service/bani_d_18_3.webp",
                    "service/bani_d_18_4.webp",
                    "service/bani_d_18_5.webp",
                ]),
                'sections' => null,
            ],



        ];

        $seo_data = [
            [
                'seo_title' => 'Строительство бань из бревна в [city|pp] — Качественно и надежно',
                'seo_description' => 'Профессиональное строительство бань из бревна в [city|pp]. Используем лучшие материалы и технологии для долговечной и уютной бани.',
            ],
            [
                'seo_title' => 'Строительство бань из бруса в [city|pp] — Современные решения для вашего участка',
                'seo_description' => 'Строим бани из бруса в [city|pp] под ключ. Гарантируем высокое качество, экологичность и комфорт.',
            ],
            [
                'seo_title' => 'Строительство бань из пеноблока в [city|pp] — Быстро и экономично',
                'seo_description' => 'Предлагаем строительство бань из пеноблока в [city|pp]. Современные технологии, доступные цены и надежность.',
            ],
        ];

            $i = 0;
            foreach ($data as $item) {
                DB::table("services")->insert($item);

                DB::table("seo_data")->insert(
                    [
                        'url' => 'services/'.$item['slug'],
                        'seo_title' => $seo_data[$i]['seo_title'],
                        'seo_description' => $seo_data[$i]['seo_description'],
                    ]
                );

                $i++;
            }

    }
}
