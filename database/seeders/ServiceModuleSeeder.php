<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_14_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_14/s_14_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_14_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_14/s_14_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_14_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_14/s_14_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_14_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_14/s_14_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/modul_d_14_4.webp", file_get_contents(public_path('tmp_data/serv/s_14/modul_d_14_4.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_14_3.webp", file_get_contents(public_path('tmp_data/serv/s_14/modul_d_14_3.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_14_2.webp", file_get_contents(public_path('tmp_data/serv/s_14/modul_d_14_2.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_14_1.webp", file_get_contents(public_path('tmp_data/serv/s_14/modul_d_14_1.webp')), 'public');

        // ------------------------------

        Storage::disk('public')->put("service/s_15_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_15/s_15_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_15_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_15/s_15_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_15_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_15/s_15_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_15_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_15/s_15_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/modul_d_4.webp", file_get_contents(public_path('tmp_data/serv/s_15/modul_d_4.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_3.webp", file_get_contents(public_path('tmp_data/serv/s_15/modul_d_3.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_2.webp", file_get_contents(public_path('tmp_data/serv/s_15/modul_d_2.webp')), 'public');
        Storage::disk('public')->put("service/modul_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_15/modul_d_1.webp')), 'public');


        $data = [

            [
                'title' => "Модульные бани в [city|pp]",
                'group' => 'Модульные строения',
                'template' => null,
                'img' => 'service/s_14_gal_1.jpg',
                'slug'=> Str::slug("Модульные бани"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_14/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_14/main.html')),
                'gallery' => json_encode([
                    'service/s_14_gal_2.jpg',
                    'service/s_14_gal_3.jpg',
                    'service/s_14_gal_4.jpg',
                    'service/modul_d_14_4.webp',
                    'service/modul_d_14_3.webp',
                    'service/modul_d_14_2.webp',
                    'service/modul_d_14_1.webp',
                ]),
                'sections' => null,
            ],
            [
                'title' => "Модульные дома в [city|pp]",
                'group' => 'Модульные строения',
                'template' => null,
                'img' => 'service/s_15_gal_1.jpg',
                'slug'=> Str::slug("Модульные дома"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_15/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_15/main.html')),
                'gallery' => json_encode([
                    'service/s_15_gal_2.jpg',
                    'service/s_15_gal_3.jpg',
                    'service/s_15_gal_4.jpg',
                    'service/modul_d_4.webp',
                    'service/modul_d_3.webp',
                    'service/modul_d_2.webp',
                    'service/modul_d_1.webp',
                ]),
                'sections' => null,
            ],




        ];

        $seo_data = [
            [
                'seo_title' => 'Модульные бани в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные модульные бани в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Модульные дома в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные модульные дома в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
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
