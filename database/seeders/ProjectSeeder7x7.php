<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder7x7 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажная сауна из бревна  SD-268',
                'img' => '/tmp_data/projects/pr_154/p154_photo_1.JPG',
                'slug' => 'odnoetaznaia-sauna-iz-brevna-sd-268',
                'start_price' => ' 3672000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_154/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_154/p154_photo_1.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_154/p154_photo_2.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 48,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой двухэтажный дом с парной SD-263',
                'img' => '/tmp_data/projects/pr_155/p155_photo_1.JPG',
                'slug' => 'nebolsoi-dvuxetaznyi-dom-s-parnoi-sd-263',
                'start_price' => ' 3825000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_155/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_155/p155_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_155/p155_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_155/p155_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_155/p155_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_155/p155_photo_5.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_155/p155_photo_6.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 50,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом из бревна с мансардным этажом SD-265',
                'img' => '/tmp_data/projects/pr_156/p156_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-iz-brevna-s-mansardnym-etazom-sd-265',
                'start_price' => ' 3362430 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_156/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_156/p156_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_156/p156_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_156/p156_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_156/p156_photo_4.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_156/p156_photo_5.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 57,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный дом SD-354',
                'img' => '/tmp_data/projects/pr_157/p157_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-dom-sd-354',
                'start_price' => ' 4074135 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_157/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_157/p157_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_157/p157_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_157/p157_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 78,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Дом с мансардным этажом SD-328',
                'img' => '/tmp_data/projects/pr_158/p158_photo_1.JPG',
                'slug' => 'dom-s-mansardnym-etazom-sd-328',
                'start_price' => ' 3760740 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_158/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_158/p158_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_158/p158_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_158/p158_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_158/p158_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 72,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с мансардой SD-330',
                'img' => '/tmp_data/projects/pr_159/p159_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-mansardoi-sd-330',
                'start_price' => ' 3718508 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_159/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_159/p159_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_159/p159_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_159/p159_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 71,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Красивый двухэтажный дом с балконом SD-329',
                'img' => '/tmp_data/projects/pr_160/p160_photo_1.JPG',
                'slug' => 'krasivyi-dvuxetaznyi-dom-s-balkonom-sd-329',
                'start_price' => ' 4919855 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_160/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_160/p160_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_160/p160_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_160/p160_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_160/p160_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 94,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Дачный двухэтажный каркасный дом SD-355',
                'img' => '/tmp_data/projects/pr_161/p161_photo_1.JPG',
                'slug' => 'dacnyi-dvuxetaznyi-karkasnyi-dom-sd-355',
                'start_price' => ' 4919855 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_161/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_161/p161_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_161/p161_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_161/p161_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_161/p161_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 94,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Уютный двухэтажный каркасный дом SD-356',
                'img' => '/tmp_data/projects/pr_162/p162_photo_1.JPG',
                'slug' => 'uiutnyi-dvuxetaznyi-karkasnyi-dom-sd-356',
                'start_price' => ' 5432180 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_162/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_162/p162_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_162/p162_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_162/p162_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_162/p162_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 104,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],
        ];

        $seo_data = [
    [
        'seo_title' => 'Одноэтажная сауна из бревна SD-268 – уютный проект в [city|pp]',
        'seo_description' => 'Проект SD-268 – одноэтажная сауна из оцилиндрованного бревна площадью 48 м². Компактное решение для загородного отдыха и комфортного использования в [city|pp].',
    ],
    [
        'seo_title' => 'Небольшой двухэтажный дом с парной SD-263 – стильное решение',
        'seo_description' => 'Проект SD-263 – двухэтажный дом из оцилиндрованного бревна площадью 50 м². Уютная планировка и парная для полноценного отдыха в загородном доме в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом из бревна с мансардным этажом SD-265 – просторный проект',
        'seo_description' => 'Проект SD-265 – дом из оцилиндрованного бревна с мансардным этажом площадью 57 м². Функциональное пространство и классический стиль для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный каркасный дом SD-354 – современный проект для комфортной жизни',
        'seo_description' => 'Проект SD-354 – каркасный дом из газобетона площадью 78 м². Просторные комнаты, современный дизайн и практичная планировка – идеальный выбор в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с мансардным этажом SD-328 – удобный проект для семьи',
        'seo_description' => 'Проект SD-328 – двухэтажный дом из газобетона с мансардным этажом площадью 72 м². Удобная планировка и гармоничная архитектура для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с мансардой SD-330 – функциональный проект',
        'seo_description' => 'Проект SD-330 – двухэтажный дом из газобетона с мансардой площадью 71 м². Продуманное зонирование и комфорт для проживания в [city|pp].',
    ],
    [
        'seo_title' => 'Красивый двухэтажный дом с балконом SD-329 – современный проект',
        'seo_description' => 'Проект SD-329 – дом из газобетона площадью 94 м² с просторным балконом. Уютная атмосфера и стильный фасад для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Дачный двухэтажный каркасный дом SD-355 – компактное решение',
        'seo_description' => 'Проект SD-355 – каркасный дом из газобетона площадью 94 м². Отличный вариант для дачи или загородного проживания в [city|pp].',
    ],
    [
        'seo_title' => 'Уютный двухэтажный каркасный дом SD-356 – просторный проект',
        'seo_description' => 'Проект SD-356 – двухэтажный каркасный дом из газобетона площадью 104 м². Просторные комнаты, современная планировка и комфортное проживание в [city|pp].',
    ],
];

        $i = 0;
        foreach ($data as $item) {

            $img_name = basename($item['img']);
            Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($item['img'])), 'public');
            $item['img'] = "projects/".$img_name;

            foreach($item['gallery'] as $key => $image) {
                $img_name = basename($image['img']);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image['img'])), 'public');
                $item['gallery'][$key]['img'] = "projects/".$img_name;
            }

            $item['gallery'] = json_encode($item['gallery']);

            foreach($item['layout'] as $key => $image) {
                $img_name = basename($image['img']);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image['img'])), 'public');
                $item['layout'][$key]['img'] = "projects/".$img_name;
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
