<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Одноэтажный дом на ленточном фундаменте",
                'img' => "/tmp_data/portfolio/port_1/p1_main.jpg",
                'slug' => "one-story-house-on-strip-foundation",
                'description' => "Одноэтажный дом из керамзитоблока с облицовкой силикатным кирпичом на ленточном фундаменте. Построен в Сургуте. Внутренняя отделка выполнена с использованием качественных материалов, что обеспечивает долговечность и комфорт проживания.",
                'type' => "Дом",
                'floors' => 1,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Керамоблок",
                'cladding' => "Штукатурка",
                'foundation' => "Лента",
                'roofing' => "Металлочерепица",
                'flooring' => null,
                'gallery' => [
                    "/tmp_data/portfolio/port_1/p1_photo_1.jpg",
                    "/tmp_data/portfolio/port_1/p1_photo_2.jpg",
                    "/tmp_data/portfolio/port_1/p1_photo_3.jpg",
                    "/tmp_data/portfolio/port_1/p1_photo_4.jpg",
                    "/tmp_data/portfolio/port_1/p1_photo_5.jpg",
                    "/tmp_data/portfolio/port_1/p1_photo_6.jpg",
                ],
            ],
            [
                'title' => "Дом из СИП-панелей в СНТ",
                'img' => "/tmp_data/portfolio/port_2/p2_main.jpg",
                'slug' => "sip-panel-house-in-snt",
                'description' => "Дом из СИП-панелей в СНТ с отделкой под ключ. Построен в одном из СНТ города Сургут. Отличается высокой энергоэффективностью и быстрой сборкой. Внутренняя отделка выполнена с использованием качественных материалов, что обеспечивает долговечность и комфорт проживания.",
                'type' => "Дом",
                'floors' => 2,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "СИП-панели",
                'cladding' => "Фасадная плитка",
                'foundation' => "Свайный фундамент",
                'roofing' => "Металлочерепица",
                'flooring' => "Перекрытия",
                'gallery' => [
                    "/tmp_data/portfolio/port_2/p2_photo_1.jpg",
                    "/tmp_data/portfolio/port_2/p2_photo_2.jpg",
                    "/tmp_data/portfolio/port_2/p2_photo_3.jpg",
                    "/tmp_data/portfolio/port_2/p2_photo_4.jpg",
                    "/tmp_data/portfolio/port_2/p2_photo_5.jpg",
                ],
            ],
            [
                'title' => "Современный одноэтажный дом",
                'img' => "/tmp_data/portfolio/port_3/p3_main.jpg",
                'slug' => Str::slug('Современный одноэтажный дом'),
                'description' => "Дом из СИП-панелей в СНТ с отделкой под ключ. Построен в одном из СНТ города Сургут. Отличается высокой энергоэффективностью и быстрой сборкой. Внутренняя отделка выполнена с использованием качественных материалов, что обеспечивает долговечность и комфорт проживания.",
                'type' => "Дом",
                'floors' => 1,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Керамоблок",
                'cladding' => "Штукатурка",
                'foundation' => "Монолитный",
                'roofing' => "Металлочерепица",
                'flooring' => null,
                'gallery' => [
                    "/tmp_data/portfolio/port_3/p3_photo_1.jpg",
                    "/tmp_data/portfolio/port_3/p3_photo_2.jpg",
                    "/tmp_data/portfolio/port_3/p3_photo_3.jpg",
                    "/tmp_data/portfolio/port_3/p3_photo_4.jpg",
                    "/tmp_data/portfolio/port_3/p3_photo_5.jpg",
                    "/tmp_data/portfolio/port_3/p3_photo_6.jpg",
                ],
            ],
            [
                'title' => "Традиционный английский коттедж из кирпича",
                'img' => "/tmp_data/portfolio/port_4/p4_main.jpg",
                'slug' => Str::slug('Традиционный английский коттедж из кирпича'),
                'description' => "Этот двухэтажный кирпичный коттедж воплощает очарование классической английской архитектуры с его симметричным фасадом и благородным цветом кирпича. Надежная металлочерепичная крыша с характерным скатом и аккуратными мансардными окнами обеспечивает долговечность и завершенный облик. Внутри вас ждут уютные, продуманные интерьеры с камином в гостиной, создающие атмосферу истинного домашнего тепла. Просторные комнаты на двух этажах предлагают комфорт для семьи, сохраняя традиционные пропорции и планировочные решения. Качественная кирпичная кладка и современная кровля гарантируют тепло, тишину и надежность дома на долгие годы.",
                'type' => "Дом",
                'floors' => 2,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Кирпич",
                'cladding' => "Фасадная плитка",
                'foundation' => "Монолитный",
                'roofing' => "Металлочерепица",
                'flooring' => "Перекрытия",
                'gallery' => [
                    "/tmp_data/portfolio/port_4/p4_photo_1.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_2.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_3.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_4.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_5.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_6.jpg",
                    "/tmp_data/portfolio/port_4/p4_photo_7.jpg",
                ],
            ],
            [
                'title' => "Типовой дом из газобетона Практик",
                'img' => "/tmp_data/portfolio/port_5/p5_main.jpg",
                'slug' => Str::slug('Типовой дом из газобетона Практик'),
                'description' => "Этот одноэтажный дом реализован по экономичному типовому проекту с использованием современных материалов. Надежный монолитный фундамент обеспечивает стабильность конструкции на различных грунтах. Теплые и ровные стены из газобетона гарантируют комфортный микроклимат внутри и снижают затраты на отопление. Прочная металлочерепичная крыша придает дому аккуратный внешний вид и защищает от непогоды на долгие годы. Готовое решение идеально подходит для быстрого возведения комфортного и надежного жилья без лишних затрат.",
                'type' => "Дом",
                'floors' => 1,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Газобетон",
                'cladding' => "Фасадная плитка",
                'foundation' => "Монолитный",
                'roofing' => "Металлочерепица",
                'flooring' => null,
                'gallery' => [
                    "/tmp_data/portfolio/port_5/p5_photo_1.jpg",
                    "/tmp_data/portfolio/port_5/p5_photo_2.jpg",
                    "/tmp_data/portfolio/port_5/p5_photo_3.jpg",
                    "/tmp_data/portfolio/port_5/p5_photo_4.jpg",
                    "/tmp_data/portfolio/port_5/p5_photo_5.jpg",
                    "/tmp_data/portfolio/port_5/p5_photo_6.jpg",
                ],
            ],
            [
                'title' => "Современный коттедж из газобетона с облицовкой",
                'img' => "/tmp_data/portfolio/port_6/p6_main.jpg",
                'slug' => Str::slug('Современный коттедж из газобетона с облицовкой'),
                'description' => "Этот двухэтажный коттедж сочетает практичность газобетонных стен с эстетикой фасадной облицовки. Теплоэффективные блоки создают комфортный микроклимат и снижают расходы на отопление во всем доме. Элегантная фасадная облицовка (кирпич, штукатурка или камень) придает дому респектабельный внешний вид и дополнительно защищает газобетон. Надежная металлочерепичная крыша завершает образ и гарантирует долговечную защиту от непогоды. В результате получается стильное, энергоэффективное и надежное жилье для комфортной жизни семьи.",
                'type' => "Дом",
                'floors' => 2,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Газобетон",
                'cladding' => "Фасадная плитка",
                'foundation' => "Монолитный",
                'roofing' => "Металлочерепица",
                'flooring' => "Перекрытия",
                'gallery' => [
                    "/tmp_data/portfolio/port_6/p6_photo_1.jpg",
                    "/tmp_data/portfolio/port_6/p6_photo_2.jpg",
                ],
            ],
            [
                'title' => "Видовой коттедж Панорама из газобетона",
                'img' => "/tmp_data/portfolio/port_7/p7_main.jpg",
                'slug' => Str::slug('Видовой коттедж "Панорама" из газобетона'),
                'description' => "Этот современный двухэтажный дом из газобетона создан для наслаждения прекрасными видами благодаря панорамному остеклению ключевых зон. Пространство в 150 м² продумано до мелочей: здесь гармонично соседствуют приватные спальни и кабинет с просторной кухней-гостиной, а необычный холл с тренажерами, библиотека и два санузла обеспечивают максимум комфорта. Теплые стены из газобетона толщиной 400 мм гарантируют энергоэффективность и уют в любое время года. Элегантный фасад с утеплением и отделкой декоративной штукатуркой, дополненной благородными элементами под натуральный камень, придает дому респектабельный и стильный облик. Надежная кровля из гибкой черепицы Ruflex завершает образ, обеспечивая тишину и долговечную защиту.",
                'type' => "Дом",
                'floors' => 2,
                'location' => "Сургут",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Газобетон",
                'cladding' => "Фасадная плитка",
                'foundation' => "Монолитный",
                'roofing' => "Гибкая черепица",
                'flooring' => "Перекрытия",
                'gallery' => [
                    "/tmp_data/portfolio/port_7/p7_photo_1.jpg",
                    "/tmp_data/portfolio/port_7/p7_photo_2.jpg",
                    "/tmp_data/portfolio/port_7/p7_photo_3.jpg",
                    "/tmp_data/portfolio/port_7/p7_photo_4.jpg",
                    "/tmp_data/portfolio/port_7/p7_photo_5.jpg",
                ],
            ],
        ];

        $seo_data = [
            [
            'seo_title' => 'Одноэтажный дом на ленточном фундаменте в Сургуте',
            'seo_description' => 'Строительство одноэтажного дома из керамзитоблока с облицовкой силикатным кирпичом на ленточном фундаменте. Фото, описание, материалы и местоположение.'
            ],
            [
            'seo_title' => 'Дом из СИП-панелей в СНТ города Сургут',
            'seo_description' => 'Дом из СИП-панелей с отделкой под ключ. Фото, описание, материалы, характеристики и координаты объекта.'
            ],
            [
            'seo_title' => 'Современный одноэтажный дом в Сургуте',
            'seo_description' => 'Современный одноэтажный дом из керамзитоблока с отделкой. Галерея, характеристики, описание и местоположение.'
            ],
            [
            'seo_title' => 'Традиционный английский коттедж из кирпича в Сургуте',
            'seo_description' => 'Двухэтажный кирпичный коттедж в английском стиле. Фото, описание, материалы, характеристики и координаты объекта.'
            ],
            [
            'seo_title' => 'Типовой дом из газобетона Практик в Сургуте',
            'seo_description' => 'Одноэтажный дом по типовому проекту из газобетона. Галерея, характеристики, описание и местоположение.'
            ],
            [
            'seo_title' => 'Современный коттедж из газобетона с облицовкой в Сургуте',
            'seo_description' => 'Двухэтажный коттедж из газобетона с фасадной облицовкой. Фото, описание, материалы, характеристики и координаты объекта.'
            ],
            [
            'seo_title' => 'Видовой коттедж Панорама из газобетона в Сургуте',
            'seo_description' => 'Современный двухэтажный дом с панорамным остеклением из газобетона. Галерея, описание, характеристики и местоположение.'
            ],
        ];

        $i = 0;
        foreach ($data as $item) {

            $img_name = basename($item['img']);
            Storage::disk('public')->put("portfolio/".$img_name, file_get_contents(public_path($item['img'])), 'public');
            $item['img'] = "portfolio/".$img_name;

            foreach($item['gallery'] as $key => $image) {
                $img_name = basename($image);
                Storage::disk('public')->put("portfolio/".$img_name, file_get_contents(public_path($image)), 'public');
                $item['gallery'][$key] = "portfolio/".$img_name;
            }

            $item['gallery'] = json_encode($item['gallery']);

            DB::table("portfolios")->insert($item);


            DB::table("seo_data")->insert(
                [
                    'url' => 'page/'.$item['slug'],
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],
                ]
            );

            $i++;
        }
    }
}
