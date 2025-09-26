<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceFasadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_1_1_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_1/s_1_1_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_1_1_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_1_1/s_1_1_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_1_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_1_1/s_1_1_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_1_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_1_1/s_1_1_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_1_2_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_1_2/s_1_2_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_2_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/s_1_2_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_1_2_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_1_2/s_1_2_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_2_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/s_1_2_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_bloc_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/fasaf_bloc_d_1.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_bloc_d_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/fasaf_bloc_d_2.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_bloc_d_3.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/fasaf_bloc_d_3.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_bloc_d_4.webp", file_get_contents(public_path('tmp_data/serv/s_1_2/fasaf_bloc_d_4.webp')), 'public');

        Storage::disk('public')->put("service/s_1_3_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_3/s_1_3_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_1_3_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_3/s_1_3_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_1_3_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_1_3/s_1_3_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_1_3_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_1_3/s_1_3_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/facad_saiding_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_3/facad_saiding_d_1.webp')), 'public');

        Storage::disk('public')->put("service/s_1_4_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_1_4/s_1_4_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_4_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_4/s_1_4_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_1_4_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_1_4/s_1_4_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_4_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_1_4/s_1_4_gal_4.jpg')), 'public');
        Storage::disk('public')->put("service/facad_ib_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_4/facad_ib_d_1.webp')), 'public');

        Storage::disk('public')->put("service/s_1_5_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/s_1_5_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_1_5_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/s_1_5_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_1_5_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_1_5/s_1_5_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_1_5_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_1_5/s_1_5_gal_4.jpg')), 'public');
        Storage::disk('public')->put("service/fasaf_plita_d_1.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/fasaf_plita_d_1.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_plita_d_2.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/fasaf_plita_d_2.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_plita_d_3.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/fasaf_plita_d_3.webp')), 'public');
        Storage::disk('public')->put("service/fasaf_plita_d_4.webp", file_get_contents(public_path('tmp_data/serv/s_1_5/fasaf_plita_d_4.webp')), 'public');


        $data = [

            [
                'title' => "Отделка фасадов профлистом в [city|pp]",
                'group' => 'Фасадные работы',
                'template' => null,
                'img' => 'service/s_1_1_gal_1.webp',
                'slug'=> Str::slug("Отделка фасадов профлистом"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1_1/main.html')),
                'gallery' => json_encode([
                    'service/s_1_1_gal_2.jpg',
                    'service/s_1_1_gal_3.jpg',
                    'service/s_1_1_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка фасадов блокхаусом в [city|pp]",
                'group' => 'Фасадные работы',
                'template' => null,
                'img' => 'service/s_1_2_gal_1.jpg',
                'slug'=> Str::slug("Отделка фасадов блокхаусом"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1_2/main.html')),
                'gallery' => json_encode([
                    'service/s_1_2_gal_2.webp',
                    'service/s_1_2_gal_3.jpg',
                    'service/s_1_2_gal_4.webp',
                    'service/fasaf_bloc_d_1.webp',
                    'service/fasaf_bloc_d_2.webp',
                    'service/fasaf_bloc_d_3.webp',
                    'service/fasaf_bloc_d_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка фасадов сайдингом в [city|pp]",
                'group' => 'Фасадные работы',
                'template' => null,
                'img' => 'service/s_1_3_gal_1.webp',
                'slug'=> Str::slug("Отделка фасадов сайдингом"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1_3/main.html')),
                'gallery' => json_encode([
                    'service/s_1_3_gal_2.webp',
                    'service/s_1_3_gal_3.webp',
                    'service/s_1_3_gal_4.webp',
                    'service/facad_saiding_d_1.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка фасадов имитацией бруса в [city|pp]",
                'group' => 'Фасадные работы',
                'template' => null,
                'img' => 'service/s_1_4_gal_1.jpg',
                'slug'=> Str::slug("Отделка фасадов имитацией бруса"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1_4/main.html')),
                'gallery' => json_encode([
                    'service/s_1_4_gal_2.webp',
                    'service/s_1_4_gal_3.jpg',
                    'service/s_1_4_gal_4.jpg',
                    'service/facad_ib_d_1.webp',

                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка фасадными панелями в [city|pp]",
                'group' => 'Фасадные работы',
                'template' => null,
                'img' => 'service/s_1_5_gal_1.webp',
                'slug'=> Str::slug("Отделка фасадными панелями"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1_5/main.html')),
                'gallery' => json_encode([
                    'service/s_1_5_gal_2.webp',
                    'service/s_1_5_gal_3.jpg',
                    'service/s_1_5_gal_4.jpg',
                    'service/fasaf_plita_d_1.webp',
                    'service/fasaf_plita_d_2.webp',
                    'service/fasaf_plita_d_3.webp',
                    'service/fasaf_plita_d_4.webp',
                ]),
                'sections' => null,
            ],



        ];

        $seo_data = [
            [
                'seo_title' => 'Профлист для фасада в [city|pp] — Современные решения отделки',
                'seo_description' => 'Выполняем профессиональную отделку фасадов профлистом в [city|pp]. Эстетика, надежность и долговечность для вашего дома. Индивидуальный подход и гарантия результата.',
            ],

            [
                'seo_title' => 'Блокхаус для фасада в [city|pp] — Эстетика и тепло вашего дома',
                'seo_description' => 'Преобразите фасад с помощью блокхауса в [city|pp]. Качественный монтаж, долговечные материалы и стильный внешний вид. Работаем быстро и аккуратно.',
            ],

            [
                'seo_title' => 'Сайдинг для фасада в [city|pp] — Практичность и стиль',
                'seo_description' => 'Профессиональная отделка фасадов сайдингом в [city|pp]. Современные технологии, широкий выбор материалов и гарантированное качество работ.',
            ],

            [
                'seo_title' => 'Имитация бруса для фасада в [city|pp] — Натуральный облик и надежность',
                'seo_description' => 'Отделка фасада имитацией бруса в [city|pp] придаст вашему дому уют и солидность. Используем только проверенные материалы и обеспечиваем долгий срок службы.',
            ],
            [
                'seo_title' => 'Фасадные панели в [city|pp] — Быстро, красиво, долговечно',
                'seo_description' => 'Установка фасадных панелей в [city|pp] — это современное решение для защиты и украшения вашего дома. Гарантия качества и индивидуальный подбор материалов.',
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
