<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'title' => "Политика в области обработки персональных данных",
                'slug' => Str::slug("Политика в области обработки персональных данных"),
                'template' => null,
                'description' => file_get_contents(public_path('page_text/policy.html')),
            ],

            [
                'title' => "Согласие на обработку персональных данных",
                'slug' => Str::slug("Согласие на обработку персональных данных"),
                'template' => null,
                'description' => file_get_contents(public_path('page_text/accept.html')),
            ],

            [
                'title' => "О файлах Cookie",
                'slug' => Str::slug("О файлах Cookie"),
                'template' => null,
                'description' => file_get_contents(public_path('page_text/cookie.html')),
            ],

            [
                'title' => 'О компании РусСтрой',
                'slug' => Str::slug("О компании РусСтрой"),
                'template' => "templates.about",
                'description' => file_get_contents(public_path('page_text/about.html')),
            ],

            [
                'title' => 'Ипотека на строительство домов',
                'slug' => Str::slug("Ипотека на строительство домов"),
                'template' => "templates.ipoteka",
                'description' => file_get_contents(public_path('page_text/ipoteka.html')),
            ],

            [
                'title' => 'Способы оплаты',
                'slug' => Str::slug("Способы оплаты"),
                'template' => 'templates.pay',
                'description' => file_get_contents(public_path('page_text/pay.html')),
            ],
        ];


        $seo_data = [
            [
                'seo_title' => 'Политика обработки персональных данных',
                'seo_description' => 'Узнайте о политике обработки персональных данных компании РусСтрой и о защите вашей информации.'
            ],
            [
                'seo_title' => 'Согласие на обработку персональных данных',
                'seo_description' => 'Ознакомьтесь с условиями согласия на обработку персональных данных при работе с РусСтрой.'
            ],
            [
                'seo_title' => 'Информация о файлах Cookie',
                'seo_description' => 'Подробная информация о файлах Cookie, используемых на сайте РусСтрой.'
            ],
            [
                'seo_title' => 'О нашей компании',
                'seo_description' => 'История, миссия и ценности строительной компании РусСтрой.'
            ],
            [
                'seo_title' => 'Ипотека на строительство домов',
                'seo_description' => 'Выгодные условия ипотеки на строительство домов от компании РусСтрой.'
            ],
            [
                'seo_title' => 'Способы оплаты',
                'seo_description' => 'Все доступные способы оплаты услуг и строительства в компании РусСтрой.'
            ],
        ];

        $i = 0;
        foreach ($data as $item) {

            DB::table("pages")->insert($item);

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
