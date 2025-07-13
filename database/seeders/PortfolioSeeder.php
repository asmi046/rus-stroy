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
                'img' => "/tmp_data/portfolio/house_single_floor_1.jpg",
                'slug' => "single-floor-house-belt-foundation",
                'description' => "Построен одноэтажный дом из керамзитоблока с облицовкой силикатным кирпичом на ленточном фундаменте.",
                'type' => "Дом",
                'floors' => 1,
                'location' => "Санкт-Петербург",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Керамзитоблок",
                'cladding' => "Силикатный кирпич",
                'foundation' => "Лента",
                'roofing' => "Металлочерепица",
                'flooring' => "Плиты",
                'gallery' => [
                    "/tmp_data/portfolio/house_single_floor_1.jpg",
                    "/tmp_data/portfolio/house_single_floor_2.jpg",
                    "/tmp_data/portfolio/house_single_floor_3.jpg",
                    "/tmp_data/portfolio/house_single_floor_4.jpg",
                    "/tmp_data/portfolio/house_single_floor_5.jpg",
                    "/tmp_data/portfolio/house_single_floor_6.jpg",
                    "/tmp_data/portfolio/house_single_floor_7.jpg"
                ],
            ],
            [
                'title' => "Дом с тёплым гаражом",
                'img' => "/tmp_data/portfolio/house_warm_garage_1.jpg",
                'slug' => "house-with-warm-garage",
                'description' => "Построен одноэтажный дом с тёплым гаражом из керамзитоблока с облицовкой штукатуркой на монолитной плите.",
                'type' => "Дом",
                'floors' => 1,
                'location' => "Санкт-Петербург",
                'coordinates' => "59.918933, 30.336124",
                'wall_material' => "Керамзитоблок",
                'cladding' => "Штукатурка",
                'foundation' => "Монолитная плита",
                'roofing' => "Металлочерепица",
                'flooring' => "Плиты",
                'gallery' => [
                    "/tmp_data/portfolio/house_warm_garage_1.jpg",
                    "/tmp_data/portfolio/house_warm_garage_2.jpg",
                    "/tmp_data/portfolio/house_warm_garage_3.jpg",
                    "/tmp_data/portfolio/house_warm_garage_4.jpg",
                    "/tmp_data/portfolio/house_warm_garage_5.jpg",
                    "/tmp_data/portfolio/house_warm_garage_6.jpg"
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
