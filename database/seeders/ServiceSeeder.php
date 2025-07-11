<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'title' => "Строительство бань",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Шлифовка бань и домов из сруба",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Кровельные работы",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Внутренняя отделка",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство веранд и террасс",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство беседок",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Ленточный фундамент",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Свайный фундамент",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Монолитный фундамент",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство заборов",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Установка откатных и распашных ворот",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство навесов",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],



        ];


        foreach ($data as $item) {
            // Storage::disk('public')->put("main_bnr.webp", file_get_contents(public_path('img/main_bnr.webp')), 'public');
            DB::table("services")->insert($item);

            // DB::table("seo_data")->insert(
            //     [
            //         'url' => 'page/'.$item['slug'],
            //         'seo_title' => $item['title'],
            //         'seo_description' => $item['title'],
            //     ]
            // );
        }
    }
}
