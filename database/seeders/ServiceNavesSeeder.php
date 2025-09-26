<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceNavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_13_1_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_13_1/s_13_1_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_1_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_13_1/s_13_1_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_1_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_13_1/s_13_1_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_1_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_13_1/s_13_1_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_13_2_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_13_2/s_13_2_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_2_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_13_2/s_13_2_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_2_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_13_2/s_13_2_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_2_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_13_2/s_13_2_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_13_3_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_13_3/s_13_3_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_3_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_13_3/s_13_3_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_3_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_13_3/s_13_3_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_3_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_13_3/s_13_3_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_13_4_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/s_13_4_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_13_4_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/s_13_4_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_13_4_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/s_13_4_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_13_4_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/s_13_4_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/naves_poli_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/naves_poli_d_1.webp')), 'public');
        Storage::disk('public')->put("service/naves_poli_d_2.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/naves_poli_d_2.webp')), 'public');
        Storage::disk('public')->put("service/naves_poli_d_3.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/naves_poli_d_3.webp')), 'public');
        Storage::disk('public')->put("service/naves_poli_d_4.webp", file_get_contents(public_path('tmp_data/serv/s_13_4/naves_poli_d_4.webp')), 'public');

        Storage::disk('public')->put("service/s_13_5_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_13_5/s_13_5_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_5_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_13_5/s_13_5_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_5_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_13_5/s_13_5_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_5_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_13_5/s_13_5_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_13_6_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_13_6/s_13_6_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_6_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_13_6/s_13_6_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_6_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_13_6/s_13_6_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_13_6_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_13_6/s_13_6_gal_4.jpg')), 'public');
        Storage::disk('public')->put("service/naves_prof_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_13_6/naves_prof_d_1.webp')), 'public');
        Storage::disk('public')->put("service/naves_prof_d_2.webp", file_get_contents(public_path('tmp_data/serv/s_13_6/naves_prof_d_2.webp')), 'public');
        Storage::disk('public')->put("service/naves_prof_d_3.webp", file_get_contents(public_path('tmp_data/serv/s_13_6/naves_prof_d_3.webp')), 'public');


        $data = [

            [
                'title' => "Деревянные навесы в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_1_gal_1.jpg',
                'slug'=> Str::slug("Деревянные навесы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_1/main.html')),
                'gallery' => json_encode([
                    'service/s_13_1_gal_2.jpg',
                    'service/s_13_1_gal_3.jpg',
                    'service/s_13_1_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Арочные навесы в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_2_gal_1.jpg',
                'slug'=> Str::slug("Арочные навесы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_2/main.html')),
                'gallery' => json_encode([
                    'service/s_13_2_gal_2.jpg',
                    'service/s_13_2_gal_3.jpg',
                    'service/s_13_2_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Двускатные навесы в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_3_gal_1.jpg',
                'slug'=> Str::slug("Двускатные навесы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_3/main.html')),
                'gallery' => json_encode([
                    'service/s_13_3_gal_2.jpg',
                    'service/s_13_3_gal_3.jpg',
                    'service/s_13_3_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Навесы из поликарбоната в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_4_gal_1.webp',
                'slug'=> Str::slug("Навесы из поликарбоната"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_4/main.html')),
                'gallery' => json_encode([
                    'service/s_13_4_gal_2.webp',
                    'service/s_13_4_gal_3.webp',
                    'service/s_13_4_gal_4.webp',
                    'service/naves_poli_d_1.webp',
                    'service/naves_poli_d_2.webp',
                    'service/naves_poli_d_3.webp',
                    'service/naves_poli_d_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Навесы из металлочерепицы в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_5_gal_1.jpg',
                'slug'=> Str::slug("Навесы из металлочерепицы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_5/main.html')),
                'gallery' => json_encode([
                    'service/s_13_5_gal_2.webp',
                    'service/s_13_5_gal_3.webp',
                    'service/s_13_5_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Навесы из профлиста в [city|pp]",
                'group' => 'Навесы',
                'template' => null,
                'img' => 'service/s_13_6_gal_1.jpg',
                'slug'=> Str::slug("Навесы из профлиста"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13_6/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13_6/main.html')),
                'gallery' => json_encode([
                    'service/s_13_6_gal_2.jpg',
                    'service/s_13_6_gal_3.jpg',
                    'service/s_13_6_gal_4.jpg',
                    'service/naves_prof_d_1.webp',
                    'service/naves_prof_d_2.webp',
                    'service/naves_prof_d_3.webp',
                ]),
                'sections' => null,
            ],

        ];

        $seo_data = [
            [
                'seo_title' => 'Деревянные навесы в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные деревянные навесы в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Арочные навесы в [city|pp] — Элегантные решения для вашего пространства',
                'seo_description' => 'Профессиональные арочные навесы в [city|pp]. Создаем стильные и функциональные конструкции для вашего комфорта.',
            ],
            [
                'seo_title' => 'Двускатные навесы в [city|pp] — Практичные решения для вашего пространства',
                'seo_description' => 'Профессиональные двускатные навесы в [city|pp]. Обеспечиваем надежность и долговечность конструкций.',
            ],
            [
                'seo_title' => 'Навесы из поликарбоната в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные навесы из поликарбоната в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Навесы из металочерепицы в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные навесы из металочерепицы в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Навесы из профлиста в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные навесы из профлиста в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
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
