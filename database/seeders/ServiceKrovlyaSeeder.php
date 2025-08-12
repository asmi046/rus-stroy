<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceKrovlyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_4_1_main.jpg", file_get_contents(public_path('tmp_data/serv/s_4_1/s_4_1_main.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_1_gal_1.jpeg", file_get_contents(public_path('tmp_data/serv/s_4_1/s_4_1_gal_1.jpeg')), 'public');
        Storage::disk('public')->put("service/s_4_1_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_4_1/s_4_1_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_1_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_1/s_4_1_gal_3.jpg')), 'public');

        Storage::disk('public')->put("service/s_4_2_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_2/s_4_2_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_2_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_4_2/s_4_2_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_4_2_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_2/s_4_2_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_2_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_4_2/s_4_2_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_4_3_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_3/s_4_3_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_3_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_4_3/s_4_3_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_4_3_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_3/s_4_3_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_3_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_4_3/s_4_3_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_4_4_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_4/s_4_4_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_4_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_4_4/s_4_4_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_4_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_4/s_4_4_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_4_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_4_4/s_4_4_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_4_5_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_5/s_4_5_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_5_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_4_5/s_4_5_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_4_5_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_5/s_4_5_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_5_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_4_5/s_4_5_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_4_6_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_6/s_4_6_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_6_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_4_6/s_4_6_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_4_6_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_6/s_4_6_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_6_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_4_6/s_4_6_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_4_7_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_4_7/s_4_7_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_4_7_gal_2.jpeg", file_get_contents(public_path('tmp_data/serv/s_4_7/s_4_7_gal_2.jpeg')), 'public');
        Storage::disk('public')->put("service/s_4_7_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_4_7/s_4_7_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_4_7_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_4_7/s_4_7_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_4_8_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_4_8/s_4_8_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_8_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_4_8/s_4_8_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_4_8_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_4_8/s_4_8_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_4_8_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_4_8/s_4_8_gal_4.webp')), 'public');

        $data = [

            [
                'title' => "Односкатная кровля в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_1_main.jpg',
                'slug'=> Str::slug("Односкатная кровля"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_1/main.html')),
                'gallery' => json_encode([
                    'service/s_4_1_gal_1.jpeg',
                    'service/s_4_1_gal_2.jpg',
                    'service/s_4_1_gal_3.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Двухскатная кровля в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_2_gal_1.jpg',
                'slug'=> Str::slug("Двухскатная кровля"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_2/main.html')),
                'gallery' => json_encode([
                    'service/s_4_2_gal_2.webp',
                    'service/s_4_2_gal_3.jpg',
                    'service/s_4_2_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Четырехскатная кровля  в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_3_gal_1.jpg',
                'slug'=> Str::slug("Четырехскатная кровля"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_3/main.html')),
                'gallery' => json_encode([
                    'service/s_4_3_gal_2.webp',
                    'service/s_4_3_gal_3.jpg',
                    'service/s_4_3_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Ломаная кровля в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_4_gal_1.jpg',
                'slug'=> Str::slug("Ломаная кровля"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_4/main.html')),
                'gallery' => json_encode([
                    'service/s_4_4_gal_2.jpg',
                    'service/s_4_4_gal_3.jpg',
                    'service/s_4_4_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Кровля из профнастила в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_5_gal_1.jpg',
                'slug'=> Str::slug("Кровля из профнастила"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_5/main.html')),
                'gallery' => json_encode([
                    'service/s_4_5_gal_2.webp',
                    'service/s_4_5_gal_3.jpg',
                    'service/s_4_5_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Кровля из металлочрепицы в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_6_gal_1.jpg',
                'slug'=> Str::slug("Кровля из металлочрепицы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_6/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_6/main.html')),
                'gallery' => json_encode([
                    'service/s_4_6_gal_2.webp',
                    'service/s_4_6_gal_3.jpg',
                    'service/s_4_6_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Мягкая кровля в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_7_gal_1.webp',
                'slug'=> Str::slug("Мягкая кровля"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_7/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_7/main.html')),
                'gallery' => json_encode([
                    'service/s_4_7_gal_2.jpeg',
                    'service/s_4_7_gal_3.webp',
                    'service/s_4_7_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Кровля из ондулина в [city|pp]",
                'group' => 'Кровельные работы',
                'template' => null,
                'img' => 'service/s_4_8_gal_1.jpg',
                'slug'=> Str::slug("Кровля из ондулина"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4_8/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4_8/main.html')),
                'gallery' => json_encode([
                    'service/s_4_8_gal_2.webp',
                    'service/s_4_8_gal_3.jpg',
                    'service/s_4_8_gal_4.webp',
                ]),
                'sections' => null,
            ],


        ];

        $seo_data = [
            [
                'seo_title' => 'Односкатная кровля в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание односкатных крыш. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Двухскатная кровля в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание двухскатных крыш. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Четырехскатная кровля в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание четырехскатных крыш. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Ломаная кровля в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание ломаных крыш. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Кровля из профнастила в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание крыш из профнастила. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Кровля из металлочрепицы в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание крыш из металлочрепицы. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Мягкая кровля в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание мягких крыш. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Кровля из ондулина в [city|pp] - Качественные кровельные работы',
                'seo_description' => 'Предлагаем полный спектр кровельных работ: монтаж, ремонт и обслуживание крыш из ондулина. Гарантия качества и долговечности.',
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
