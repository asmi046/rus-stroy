<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Строительство дома из газобетона",
                'img' => "https://example.com/images/portfolio1.jpg",
                'slug' => "construction-gasobeton",
                'description' => "Построен дом из газобетона с отделкой.",
                'type' => "Строительство",
                'floors' => 2,
                'location' => "Москва",
                'coordinates' => "55.7558, 37.6173",
                'wall_material' => "Газобетон",
                'cladding' => "Штукатурка",
                'foundation' => "Ленточный",
                'roofing' => "Металлочерепица",
                'flooring' => "Бетонные плиты",
                'gallery' => json_encode([
                    "https://example.com/images/portfolio1_1.jpg",
                    "https://example.com/images/portfolio1_2.jpg"
                ]),
            ],

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
                'gallery' => json_encode([
                    "/tmp_data/portfolio/house_single_floor_1.jpg",
                    "/tmp_data/portfolio/house_single_floor_2.jpg",
                    "/tmp_data/portfolio/house_single_floor_3.jpg",
                    "/tmp_data/portfolio/house_single_floor_4.jpg",
                    "/tmp_data/portfolio/house_single_floor_5.jpg",
                    "/tmp_data/portfolio/house_single_floor_6.jpg",
                    "/tmp_data/portfolio/house_single_floor_7.jpg"
                ]),
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
                'gallery' => json_encode([
                    "/tmp_data/portfolio/house_warm_garage_1.jpg",
                    "/tmp_data/portfolio/house_warm_garage_2.jpg",
                    "/tmp_data/portfolio/house_warm_garage_3.jpg",
                    "/tmp_data/portfolio/house_warm_garage_4.jpg",
                    "/tmp_data/portfolio/house_warm_garage_5.jpg",
                    "/tmp_data/portfolio/house_warm_garage_6.jpg"
                ]),
            ],
        ];


        foreach ($data as $item) {
            DB::table("portfolios")->insert($item);
        }
    }
}
