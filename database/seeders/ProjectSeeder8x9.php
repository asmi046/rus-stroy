<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x9 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажный современный каркасный дом SD-360',
                'img' => '/tmp_data/projects/pr_181/p181_photo_1.JPG',
                'slug' => 'odnoetaznyi-sovremennyi-karkasnyi-dom-sd-360',
                'start_price' => ' 3342880 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_181/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_181/p181_photo_1.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_181/p181_photo_2.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 64,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x9',
                'extension' => null,
            ],

            [
                'title' => 'Компактный и современного дом в стиле хай-тек SD-096',
                'img' => '/tmp_data/projects/pr_182/p182_photo_1.JPG',
                'slug' => 'kompaktnyi-i-sovremennogo-dom-v-stile-xai-tek-sd-096',
                'start_price' => ' 6502500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_182/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_182/p182_photo_9.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_182/p182_photo_10.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 102,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x9',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой и уютный практичный дом SD-103',
                'img' => '/tmp_data/projects/pr_183/p183_photo_1.JPG',
                'slug' => 'nebolsoi-i-uiutnyi-prakticnyi-dom-sd-103',
                'start_price' => ' 7076250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_183/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_183/p183_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_183/p183_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 111,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x9',
                'extension' => null,
            ],

            [
                'title' => 'Каркасный двухэтажный дом с гаражом SD-359',
                'img' => '/tmp_data/projects/pr_184/p184_photo_1.JPG',
                'slug' => 'karkasnyi-dvuxetaznyi-dom-s-garazom-sd-359',
                'start_price' => ' 6163435 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_184/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_184/p184_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_184/p184_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_184/p184_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_184/p184_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 118,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x9',
                'extension' => null,
            ],
        ];

        $seo_data = [
    [
        'seo_title' => 'Одноэтажный современный каркасный дом SD-360 – строительство в [city|pp]',
        'seo_description' => 'Проект одноэтажного дома площадью 64 м² из газобетона. Современный дизайн и комфортное планировочное решение – доступно для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Компактный дом в стиле хай-тек SD-096 – проект в [city|pp]',
        'seo_description' => 'Двухэтажный дом площадью 102 м² из газобетона. Лаконичная архитектура в стиле хай-тек и функциональная планировка для комфортной жизни в [city|pp].',
    ],
    [
        'seo_title' => 'Небольшой и уютный дом SD-103 – строительство в [city|pp]',
        'seo_description' => 'Практичный двухэтажный дом площадью 111 м² из газобетона. Идеальный вариант для комфортного проживания семьи – возведение в [city|pp].',
    ],
    [
        'seo_title' => 'Каркасный двухэтажный дом с гаражом SD-359 – проект в [city|pp]',
        'seo_description' => 'Современный дом площадью 118 м² с гаражом. Просторные планировки и надежные материалы для строительства в [city|pp].',
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
