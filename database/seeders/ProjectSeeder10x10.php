<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder10x10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Современный одноэтажный каркасный дом SD-364',
                'img' => '/tmp_data/projects/pr_136/p136_photo_1.JPG',
                'slug' => 'sovremennyi-odnoetaznyi-karkasnyi-dom-sd-364',
                'start_price' => ' 5223250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_136/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_136/p136_photo_1.JPG',
                    '/tmp_data/projects/pr_136/p136_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 1002,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный каркасный дом с террасой SD-357',
                'img' => '/tmp_data/projects/pr_137/p137_photo_1.JPG',
                'slug' => 'odnoetaznyi-karkasnyi-dom-s-terrasoi-sd-357',
                'start_price' => ' 5128785 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_137/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_137/p137_photo_1.JPG',
                    '/tmp_data/projects/pr_137/p137_photo_2.JPG',
                    '/tmp_data/projects/pr_137/p137_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 982,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Компактный мансардный коттедж с фасадом приятного вида SD-100',
                'img' => '/tmp_data/projects/pr_138/p138_photo_1.JPG',
                'slug' => 'kompaktnyi-mansardnyi-kottedz-s-fasadom-priiatnogo-vida-sd-100',
                'start_price' => ' 8542500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_138/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_138/p138_photo_1.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_2.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_3.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_4.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_5.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_6.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_7.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_8.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1342,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Дом из бревна с мансардным этажом SD-266',
                'img' => '/tmp_data/projects/pr_139/p139_photo_1.JPG',
                'slug' => 'dom-iz-brevna-s-mansardnym-etazom-sd-266',
                'start_price' => ' 7650000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_139/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_139/p139_photo_1.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_2.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_3.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_4.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_5.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1002,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный дом в стиле хай-тек SD-366',
                'img' => '/tmp_data/projects/pr_140/p140_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-dom-v-stile-xai-tek-sd-366',
                'start_price' => ' 8566130 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_140/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_140/p140_photo_1.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_2.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_3.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1642,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Стильный коттедж с жилой мансардой SD-200',
                'img' => '/tmp_data/projects/pr_141/p141_photo_1.JPG',
                'slug' => 'stilnyi-kottedz-s-ziloi-mansardoi-sd-200',
                'start_price' => ' 9116250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_141/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_141/p141_photo_1.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_2.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_3.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_4.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_5.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_6.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_7.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_8.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1432,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Современный одноэтажный каркасный дом SD-364 – строительство в [city|pp]',
                'seo_description' => 'Одноэтажный каркасный дом площадью 1002 м² из газобетона. Современный проект для комфортной жизни, доступный для строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный каркасный дом с террасой SD-357 – проект в [city|pp]',
                'seo_description' => 'Каркасный дом с просторной террасой общей площадью 982 м². Уютное решение для семьи, готовое к реализации в [city|pp].',
            ],
            [
                'seo_title' => 'Компактный мансардный коттедж SD-100 – строительство в [city|pp]',
                'seo_description' => 'Небольшой мансардный коттедж площадью 1342 м² с красивым фасадом. Практичный выбор для загородной жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Дом из бревна с мансардным этажом SD-266 – проект в [city|pp]',
                'seo_description' => 'Деревянный дом из оцилиндрованного бревна площадью 1002 м². Экологичный и тёплый вариант для строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный каркасный дом в стиле хай-тек SD-366 – строительство в [city|pp]',
                'seo_description' => 'Современный каркасный дом площадью 1642 м² в стиле хай-тек. Простор и технологичность для комфортной жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Стильный коттедж с жилой мансардой SD-200 – проект в [city|pp]',
                'seo_description' => 'Элегантный коттедж площадью 1432 м² с жилой мансардой. Стильное решение для строительства в [city|pp].',
            ],
        ];

        $i = 0;
        foreach ($data as $item) {

            $img_name = basename($item['img']);
            Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($item['img'])), 'public');
            $item['img'] = "projects/".$img_name;

            foreach($item['gallery'] as $key => $image) {
                $img_name = basename($image);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image)), 'public');
                $item['gallery'][$key] = "projects/".$img_name;
            }

            $item['gallery'] = json_encode($item['gallery']);

            foreach($item['layout'] as $key => $image) {
                $img_name = basename($image);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image)), 'public');
                $item['layout'][$key] = "projects/".$img_name;
            }

            $item['layout'] = json_encode($item['layout']);

            DB::table("projects")->insert($item);


            DB::table("seo_data")->insert(
                [
                    'url' => 'projects/'.$item['slug'],
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],

                ]
            );

            $i++;
        }


    }
}
