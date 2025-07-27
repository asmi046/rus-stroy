<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("service/facad.webp", file_get_contents(public_path('tmp_data/serv/facad.webp')), 'public');
        Storage::disk('public')->put("service/banya.webp", file_get_contents(public_path('tmp_data/serv/bany.webp')), 'public');
        Storage::disk('public')->put("service/besedki.webp", file_get_contents(public_path('tmp_data/serv/besedki.webp')), 'public');
        Storage::disk('public')->put("service/krovla.webp", file_get_contents(public_path('tmp_data/serv/krovla.webp')), 'public');
        Storage::disk('public')->put("service/lenta-f.webp", file_get_contents(public_path('tmp_data/serv/lenta-f.webp')), 'public');
        Storage::disk('public')->put("service/monolit.webp", file_get_contents(public_path('tmp_data/serv/monolit.webp')), 'public');
        Storage::disk('public')->put("service/naves.webp", file_get_contents(public_path('tmp_data/serv/naves.webp')), 'public');
        Storage::disk('public')->put("service/shlifovka.webp", file_get_contents(public_path('tmp_data/serv/shlifovka.webp')), 'public');
        Storage::disk('public')->put("service/svai.webp", file_get_contents(public_path('tmp_data/serv/svai.webp')), 'public');
        Storage::disk('public')->put("service/veranda.webp", file_get_contents(public_path('tmp_data/serv/veranda.webp')), 'public');
        Storage::disk('public')->put("service/vnutri.webp", file_get_contents(public_path('tmp_data/serv/vnutri.webp')), 'public');
        Storage::disk('public')->put("service/vorota.webp", file_get_contents(public_path('tmp_data/serv/vorota.webp')), 'public');
        Storage::disk('public')->put("service/zabor.webp", file_get_contents(public_path('tmp_data/serv/zabor.webp')), 'public');

        Storage::disk('public')->put("service/s1_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_1/s1_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s1_gal_2.jpg", file_get_contents(public_path('tmp_data/serv/s_1/s1_gal_2.jpg')), 'public');
        Storage::disk('public')->put("service/s1_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_1/s1_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s1_gal_4.webp", file_get_contents(public_path('tmp_data/serv/s_1/s1_gal_4.webp')), 'public');
        Storage::disk('public')->put("service/s1_gal_5.webp", file_get_contents(public_path('tmp_data/serv/s_1/s1_gal_5.webp')), 'public');

        Storage::disk('public')->put("service/s2_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_2/s2_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s2_gal_5.webp", file_get_contents(public_path('tmp_data/serv/s_2/s2_gal_5.webp')), 'public');
        Storage::disk('public')->put("service/s2_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_2/s2_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s2_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_2/s2_gal_3.jpg')), 'public');
        Storage::disk('public')->put("service/s2_gal_4.jpg", file_get_contents(public_path('tmp_data/serv/s_2/s2_gal_4.jpg')), 'public');

        Storage::disk('public')->put("service/s3_gal_1.jpg", file_get_contents(public_path('tmp_data/serv/s_3/s3_gal_1.jpg')), 'public');
        Storage::disk('public')->put("service/s3_gal_2.webp", file_get_contents(public_path('tmp_data/serv/s_3/s3_gal_2.webp')), 'public');
        Storage::disk('public')->put("service/s3_gal_3.jpg", file_get_contents(public_path('tmp_data/serv/s_3/s3_gal_3.jpg')), 'public');

        $data = [

            [
                'title' => "Фасадные работы",
                'template' => null,
                'img' => 'service/facad.webp',
                'slug'=> Str::slug("Фасадные работы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => json_encode([
                    'service/s1_gal_1.jpg',
                    'service/s1_gal_2.jpg',
                    'service/s1_gal_3.jpg',
                    'service/s1_gal_4.webp',
                    'service/s1_gal_5.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство бань",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
                'gallery' => json_encode([
                    'service/s2_gal_1.jpg',
                    'service/s2_gal_2.webp',
                    'service/s2_gal_3.jpg',
                    'service/s2_gal_4.jpg',
                    'service/s2_gal_5.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Шлифовка бань и домов",
                'template' => null,
                'img' => 'service/shlifovka.webp',
                'slug'=> Str::slug("Шлифовка бань и домов"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
                'gallery' => json_encode([
                    'service/s3_gal_1.jpg',
                    'service/s3_gal_2.webp',
                    'service/s3_gal_3.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Кровельные работы",
                'template' => null,
                'img' => 'service/krovla.webp',
                'slug'=> Str::slug("Кровельные работы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
                'gallery' => json_encode([
                    'service/s4_gal_1.webp',
                    'service/s4_gal_2.webp',
                    'service/s4_gal_3.jpg',
                    'service/s4_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Внутренняя отделка",
                'template' => null,
                'img' => 'service/vnutri.webp',
                'slug'=> Str::slug("Внутренняя отделка"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
                'gallery' => json_encode([
                    'service/s5_gal_1.jpg',
                    'service/s5_gal_2.jpg',
                    'service/s5_gal_3.webp',
                    'service/s5_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство веранд и террасс",
                'template' => null,
                'img' => 'service/veranda.webp',
                'slug'=> Str::slug("Строительство веранд и террасс"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_6/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
                'gallery' => json_encode([
                    'service/s6_gal_1.jpg',
                    'service/s6_gal_2.webp',
                    'service/s6_gal_3.jpg',
                    'service/s6_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство беседок",
                'template' => null,
                'img' => 'service/besedki.webp',
                'slug'=> Str::slug("Строительство беседок"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_7/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'gallery' => json_encode([
                    'service/s7_gal_1.webp',
                    'service/s7_gal_2.webp',
                    'service/s7_gal_3.webp',
                    'service/s7_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Ленточный фундамент",
                'template' => null,
                'img' => 'service/lenta-f.webp',
                'slug'=> Str::slug("Ленточный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_8/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_8/main.html')),
                'gallery' => json_encode([
                    'service/s8_gal_1.webp',
                    'service/s8_gal_2.webp',
                    'service/s8_gal_3.jpg',
                    'service/s8_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Свайный фундамент",
                'template' => null,
                'img' => 'service/svai.webp',
                'slug'=> Str::slug("Свайный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_9/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_9/main.html')),
                'gallery' => json_encode([
                    'service/s9_gal_1.webp',
                    'service/s9_gal_2.webp',
                    'service/s9_gal_3.webp',
                    'service/s9_gal_4.jpg',
                    'service/s9_gal_5.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Монолитный фундамент",
                'template' => null,
                'img' => 'service/monolit.webp',
                'slug'=> Str::slug("Монолитный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_10/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_10/main.html')),
                'gallery' => json_encode([
                    'service/s10_gal_1.webp',
                    'service/s10_gal_2.webp',
                    'service/s10_gal_3.webp',
                    'service/s10_gal_4.webp',
                    'service/s10_gal_5.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство заборов",
                'template' => null,
                'img' => 'service/zabor.webp',
                'slug'=> Str::slug("Строительство заборов"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_11/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11/main.html')),
                'gallery' => json_encode([
                    'service/s11_gal_1.jpg',
                    'service/s11_gal_2.webp',
                    'service/s11_gal_3.webp',
                    'service/s11_gal_4.webp',
                    'service/s11_gal_5.webp',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Установка откатных и распашных ворот",
                'template' => null,
                'img' => 'service/vorota.webp',
                'slug'=> Str::slug("Установка откатных и распашных ворот"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_12/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_12/main.html')),
                'gallery' => json_encode([
                    'service/s12_gal_1.webp',
                    'service/s12_gal_2.webp',
                    'service/s12_gal_3.jpg',
                    'service/s12_gal_4.jpg',
                ]),
                'sections' => null,
            ],

            [
                'title' => "Строительство навесов",
                'template' => null,
                'img' => 'service/naves.webp',
                'slug'=> Str::slug("Строительство навесов"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13/main.html')),
                'gallery' => json_encode([
                    'service/s13_gal_1.jpg',
                    'service/s13_gal_2.jpg',
                    'service/s13_gal_3.jpg',
                    'service/s13_gal_4.jpg',
                    'service/s13_gal_5.jpg',
                ]),
                'sections' => null,
            ],



        ];

        $seo_data = [
            [
                'seo_title' => 'Профессиональные фасадные работы, Качественная отделка и ремонт фасадов',
                'seo_description' => 'Предлагаем полный спектр фасадных работ: утепление, облицовка, ремонт и реставрация фасадов домов. Гарантия качества и долговечности.',
            ],
            [
                'seo_title' => 'Строительство бань под ключ, Надежные и современные решения',
                'seo_description' => 'Возводим бани любой сложности с учетом ваших пожеланий. Используем экологичные материалы и современные технологии строительства.',
            ],
            [
                'seo_title' => 'Шлифовка бань и домов из сруба, Идеальная гладкость и долговечность',
                'seo_description' => 'Профессиональная шлифовка срубов для защиты древесины и улучшения внешнего вида. Качественная обработка и индивидуальный подход.',
            ],
            [
                'seo_title' => 'Кровельные работы, Монтаж и ремонт крыш любой сложности',
                'seo_description' => 'Выполняем кровельные работы с гарантией качества. Монтаж, ремонт и обслуживание крыш всех типов и материалов.',
            ],
            [
                'seo_title' => 'Внутренняя отделка помещений, Современные решения для вашего дома',
                'seo_description' => 'Комплексная внутренняя отделка: стены, потолки, полы. Используем современные материалы и технологии для создания уюта.',
            ],
            [
                'seo_title' => 'Строительство веранд и террас, Комфортные пространства для отдыха',
                'seo_description' => 'Проектируем и строим веранды и террасы под ключ. Эстетика, надежность и долговечность в каждом проекте.',
            ],
            [
                'seo_title' => 'Строительство беседок, Уютные зоны отдыха на вашем участке',
                'seo_description' => 'Создаем беседки любой формы и размера. Индивидуальный подход и качественные материалы для вашего комфорта.',
            ],
            [
                'seo_title' => 'Ленточный фундамент, Прочное основание для вашего дома',
                'seo_description' => 'Строительство ленточных фундаментов с гарантией надежности. Используем современные технологии и материалы.',
            ],
            [
                'seo_title' => 'Свайный фундамент, Быстрое и надежное решение для строительства',
                'seo_description' => 'Монтаж свайных фундаментов для различных типов зданий. Высокая скорость работ и долговечность конструкции.',
            ],
            [
                'seo_title' => 'Монолитный фундамент, Максимальная прочность и долговечность',
                'seo_description' => 'Заливаем монолитные фундаменты для любых объектов. Гарантируем качество и соблюдение всех строительных норм.',
            ],
            [
                'seo_title' => 'Строительство заборов, Защита и эстетика вашего участка',
                'seo_description' => 'Устанавливаем заборы из различных материалов. Надежность, долговечность и привлекательный внешний вид.',
            ],
            [
                'seo_title' => 'Установка откатных и распашных ворот, Удобство и безопасность',
                'seo_description' => 'Профессиональный монтаж ворот любых типов. Современные решения для вашего дома и участка.',
            ],
            [
                'seo_title' => 'Строительство навесов, Практичные и стильные конструкции',
                'seo_description' => 'Проектируем и строим навесы для автомобилей, террас и зон отдыха. Качественные материалы и индивидуальный подход.',
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
