<?php

namespace Database\Seeders;

use DB;
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
                'img' => "/tmp_data/portfolio/port_1/main.jpg",
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
                    "/tmp_data/portfolio/port_1/photo_1.jpg",
                    "/tmp_data/portfolio/port_1/photo_2.jpg",
                    "/tmp_data/portfolio/port_1/photo_3.jpg",
                    "/tmp_data/portfolio/port_1/photo_4.jpg",
                    "/tmp_data/portfolio/port_1/photo_5.jpg",
                    "/tmp_data/portfolio/port_1/photo_6.jpg",
                ],
            ],
            [
                'title' => "Дом из СИП-панелей в СНТ",
                'img' => "/tmp_data/portfolio/port_2/main.jpg",
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
                    "/tmp_data/portfolio/port_2/photo_1.jpg",
                    "/tmp_data/portfolio/port_2/photo_2.jpg",
                    "/tmp_data/portfolio/port_2/photo_3.jpg",
                    "/tmp_data/portfolio/port_2/photo_4.jpg",
                    "/tmp_data/portfolio/port_2/photo_5.jpg",
                    "/tmp_data/portfolio/port_2/photo_6.jpg",
                ],
            ],
        ];


        $seo_data = [
            [
                'seo_title' => 'Одноэтажный дом на ленточном фундаменте в Санкт-Петербурге',
                'seo_description' => 'Строительство одноэтажного дома из керамзитоблока с облицовкой силикатным кирпичом на ленточном фундаменте. Фото, описание, материалы и местоположение.'
            ],
            [
                'seo_title' => 'Дом с тёплым гаражом из керамзитоблока в Санкт-Петербурге',
                'seo_description' => 'Построен одноэтажный дом с тёплым гаражом, облицованный штукатуркой на монолитной плите. Галерея, характеристики и координаты объекта.'
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
