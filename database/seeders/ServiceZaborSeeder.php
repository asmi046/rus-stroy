<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceZaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_11_1_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_11_1/s_11_1_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_1_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_11_1/s_11_1_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_11_1_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_11_1/s_11_1_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_1_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_11_1/s_11_1_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_11_2_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_11_2/s_11_2_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_2_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_11_2/s_11_2_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_2_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_11_2/s_11_2_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_2_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_11_2/s_11_2_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_11_3_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_11_3/s_11_3_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_3_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_11_3/s_11_3_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_3_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_11_3/s_11_3_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_11_3_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_11_3/s_11_3_gal_4.jpg')), 'public');

        $data = [

            [
                'title' => "Заборы из профнастила в [city|pp]",
                'group' => 'Заборы',
                'template' => null,
                'img' => 'service/s_11_1_gal_1.jpg',
                'slug'=> Str::slug("Заборы из профнастила"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_11_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11_1/main.html')),
                'gallery' => json_encode([
                    'service/s_11_1_gal_2.webp',
                    'service/s_11_1_gal_3.jpg',
                    'service/s_11_1_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Заборы из евроштакетника в [city|pp]",
                'group' => 'Заборы',
                'template' => null,
                'img' => 'service/s_11_2_gal_1.jpg',
                'slug'=> Str::slug("Заборы из евроштакетника"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_11_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11_2/main.html')),
                'gallery' => json_encode([
                    'service/s_11_2_gal_2.jpg',
                    'service/s_11_2_gal_3.jpg',
                    'service/s_11_2_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Заборы из блокхауса в [city|pp]",
                'group' => 'Заборы',
                'template' => null,
                'img' => 'service/s_11_3_gal_1.jpg',
                'slug'=> Str::slug("Заборы из блокхауса"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_11_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11_3/main.html')),
                'gallery' => json_encode([
                    'service/s_11_3_gal_2.jpg',
                    'service/s_11_3_gal_3.jpg',
                    'service/s_11_3_gal_4.jpg',
                ]),
                'sections' => null,
            ],


        ];

        $seo_data = [
            [
            'seo_title' => 'Заборы из профнастила в [city|pp] — Современные решения для вашего уюта',
            'seo_description' => 'Профессиональные заборы из профнастила в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Заборы из евроштакетника в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные заборы из евроштакетника в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
                'seo_title' => 'Заборы из блокхауса в [city|pp] — Современные решения для вашего уюта',
                'seo_description' => 'Профессиональные заборы из блокхауса в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
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
