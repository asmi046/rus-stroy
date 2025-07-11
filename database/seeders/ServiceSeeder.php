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

        $data = [

            [
                'title' => "Фасадные работы",
                'template' => null,
                'img' => 'service/facad.webp',
                'slug'=> Str::slug("Фасадные работы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_1/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_1/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство бань",
                'template' => null,
                'img' => 'service/banya.webp',
                'slug'=> Str::slug("Строительство бань"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_2/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_2/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Шлифовка бань и домов из сруба",
                'template' => null,
                'img' => 'service/shlifovka.webp',
                'slug'=> Str::slug("Шлифовка бань и домов из сруба"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_3/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_3/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Кровельные работы",
                'template' => null,
                'img' => 'service/krovla.webp',
                'slug'=> Str::slug("Кровельные работы"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_4/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_4/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Внутренняя отделка",
                'template' => null,
                'img' => 'service/vnutri.webp',
                'slug'=> Str::slug("Внутренняя отделка"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_5/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_5/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство веранд и террасс",
                'template' => null,
                'img' => 'service/veranda.webp',
                'slug'=> Str::slug("Строительство веранд и террасс"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_6/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_6/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство беседок",
                'template' => null,
                'img' => 'service/besedki.webp',
                'slug'=> Str::slug("Строительство беседок"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_7/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_7/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Ленточный фундамент",
                'template' => null,
                'img' => 'service/lenta-f.webp',
                'slug'=> Str::slug("Ленточный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_8/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_8/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Свайный фундамент",
                'template' => null,
                'img' => 'service/svai.webp',
                'slug'=> Str::slug("Свайный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_9/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_9/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Монолитный фундамент",
                'template' => null,
                'img' => 'service/monolit.webp',
                'slug'=> Str::slug("Монолитный фундамент"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_10/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_10/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство заборов",
                'template' => null,
                'img' => 'service/zabor.webp',
                'slug'=> Str::slug("Строительство заборов"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_11/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_11/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Установка откатных и распашных ворот",
                'template' => null,
                'img' => 'service/vorota.webp',
                'slug'=> Str::slug("Установка откатных и распашных ворот"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_12/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_12/main.html')),
                'gallery' => null,
                'sections' => null,
            ],

            [
                'title' => "Строительство навесов",
                'template' => null,
                'img' => 'service/naves.webp',
                'slug'=> Str::slug("Строительство навесов"),
                'short_description' => file_get_contents(public_path('tmp_data/serv/s_13/short.html')),
                'description' => file_get_contents(public_path('tmp_data/serv/s_13/main.html')),
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
