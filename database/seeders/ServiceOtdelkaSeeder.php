<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceOtdelkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("service/s_5_1_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_5_1/s_5_1_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_5_1_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_5_1/s_5_1_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_5_1_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_5_1/s_5_1_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_5_1_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_5_1/s_5_1_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_5_2_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_5_2/s_5_2_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_5_2_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_5_2/s_5_2_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_5_2_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_5_2/s_5_2_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_5_2_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_5_2/s_5_2_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_5_3_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_5_3/s_5_3_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s_5_3_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_5_3/s_5_3_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s_5_3_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_5_3/s_5_3_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s_5_3_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_5_3/s_5_3_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s_5_4_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_5_4/s_5_4_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_5_4_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_5_4/s_5_4_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_5_4_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_5_4/s_5_4_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_5_4_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_5_4/s_5_4_gal_4.webp')), 'public');

        Storage::disk('public')->put("service/s_5_5_gal_1.webp", file_get_contents(public_path('tmp_data/serv/s_5_5/s_5_5_gal_1.webp')), 'public');
        Storage::disk('public')->put("service/s_5_5_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_5_5/s_5_5_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s_5_5_gal_3.webp", file_get_contents(public_path('tmp_data/serv/s_5_5/s_5_5_gal_3.webp')), 'public');
        Storage::disk('public')->put("service/s_5_5_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_5_5/s_5_5_gal_4.webp')), 'public');


        $data = [

            [
                'title' => "Внутренняя отделка бань в [city|pp]",
                'group' => 'Отделка',
                'template' => null,
                'img' => 'service/s_5_1_gal_1.webp',
                'slug'=> Str::slug("Внутренняя отделка бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5_1/main.html')),
                'gallery' => json_encode([
                    'service/s_5_1_gal_2.jpg',
                    'service/s_5_1_gal_3.webp',
                    'service/s_5_1_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Внутренняя отделка промышленных помещений в [city|pp]",
                'group' => 'Отделка',
                'template' => null,
                'img' => 'service/s_5_2_gal_1.webp',
                'slug'=> Str::slug("Внутренняя отделка промышленных помещений"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5_2/main.html')),
                'gallery' => json_encode([
                    'service/s_5_2_gal_2.jpg',
                    'service/s_5_2_gal_3.webp',
                    'service/s_5_2_gal_4.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка вагонкой в [city|pp]",
                'group' => 'Отделка',
                'template' => null,
                'img' => 'service/s_5_3_gal_1.jpg',
                'slug'=> Str::slug("Отделка вагонкой"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5_3/main.html')),
                'gallery' => json_encode([
                    'service/s_5_3_gal_2.jpg',
                    'service/s_5_3_gal_3.jpg',
                    'service/s_5_3_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Отделка имитацией бруса в [city|pp]",
                'group' => 'Отделка',
                'template' => null,
                'img' => 'service/s_5_4_gal_1.webp',
                'slug'=> Str::slug("Отделка имитацией бруса"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5_4/main.html')),
                'gallery' => json_encode([
                    'service/s_5_4_gal_1.webp',
                    'service/s_5_4_gal_2.webp',
                    'service/s_5_4_gal_3.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Монтаж гипсокартона в [city|pp]",
                'group' => 'Отделка',
                'template' => null,
                'img' => 'service/s_5_5_gal_1.webp',
                'slug'=> Str::slug("Монтаж гипсокартона"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5_5/main.html')),
                'gallery' => json_encode([
                    'service/s_5_5_gal_1.webp',
                    'service/s_5_5_gal_2.webp',
                    'service/s_5_5_gal_3.webp',
                ]),
                'sections' => null,
            ],

        ];

        $seo_data = [
            [
            'seo_title' => 'Внутренняя отделка бань в [city|pp] — Современные решения для вашего уюта',
            'seo_description' => 'Профессиональная внутренняя отделка бань в [city|pp]. Используем современные материалы и технологии для создания комфортного пространства.',
            ],
            [
            'seo_title' => 'Отделка промышленных помещений в [city|pp] — Эффективность и надежность',
            'seo_description' => 'Комплексная отделка промышленных помещений в [city|pp]. Гарантируем долговечность и соответствие стандартам безопасности.',
            ],
            [
            'seo_title' => 'Отделка вагонкой в [city|pp] — Натуральность и эстетика',
            'seo_description' => 'Выполним отделку вагонкой в [city|pp] под ключ. Экологичные материалы и аккуратная работа для вашего комфорта.',
            ],
            [
            'seo_title' => 'Отделка имитацией бруса в [city|pp] — Стиль и тепло вашего дома',
            'seo_description' => 'Профессиональная отделка имитацией бруса в [city|pp]. Создаём уютную атмосферу и привлекательный внешний вид.',
            ],
            [
            'seo_title' => 'Монтаж гипсокартона в [city|pp] — Быстро и качественно',
            'seo_description' => 'Оперативный монтаж гипсокартона в [city|pp] для любых помещений. Гарантия ровных поверхностей и точного соблюдения сроков.',
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
