<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder6x6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Двухэтажный дом для небольшого участка SD-297',
                'img' => '/tmp_data/projects/pr_104/p104_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-dlia-nebolsogo-ucastka-sd-297',
                'start_price' => ' 3898750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_104/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_104/p104_photo_1.JPG',
                    '/tmp_data/projects/pr_104/p104_photo_2.JPG',
                    '/tmp_data/projects/pr_104/p104_photo_3.JPG',
                    '/tmp_data/projects/pr_104/p104_photo_4.JPG',
                    '/tmp_data/projects/pr_104/p104_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 612,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x6',
                'extension' => null,
            ],

            [
                'title' => 'Маленький двухэтажный дом из бревна SD-264',
                'img' => '/tmp_data/projects/pr_105/p105_photo_1.JPG',
                'slug' => 'malenkii-dvuxetaznyi-dom-iz-brevna-sd-264',
                'start_price' => ' 3748500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_105/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_105/p105_photo_1.JPG',
                    '/tmp_data/projects/pr_105/p105_photo_2.JPG',
                    '/tmp_data/projects/pr_105/p105_photo_3.JPG',
                    '/tmp_data/projects/pr_105/p105_photo_4.JPG',
                    '/tmp_data/projects/pr_105/p105_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 492,
                'wall_material' => 'Клеёный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x6',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом для небольшого участка с мансардой SD-298',
                'img' => '/tmp_data/projects/pr_106/p106_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-dlia-nebolsogo-ucastka-s-mansardoi-sd-298',
                'start_price' => ' 4590000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_106/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_106/p106_photo_1.JPG',
                    '/tmp_data/projects/pr_106/p106_photo_2.JPG',
                    '/tmp_data/projects/pr_106/p106_photo_3.JPG',
                    '/tmp_data/projects/pr_106/p106_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 722,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x6',
                'extension' => null,
            ],

        ];

        $seo_data = [
    [
        'seo_title' => 'Двухэтажный дом для небольшого участка SD-297 – проект в [city|pp]',
        'seo_description' => 'Проект SD-297 – компактный двухэтажный дом из газобетона площадью 612 м². Идеален для небольшого участка: современная планировка, комфортное пространство и доступное строительство в [city|pp].',
    ],
    [
        'seo_title' => 'Маленький двухэтажный дом из бревна SD-264 – стильное решение для семьи',
        'seo_description' => 'SD-264 – уютный двухэтажный дом из клеёного бруса площадью 492 м². Теплый, экологичный и функциональный проект, который станет отличным выбором для комфортного проживания в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с мансардой SD-298 – проект для строительства в [city|pp]',
        'seo_description' => 'Проект SD-298 – современный двухэтажный дом из газобетона площадью 722 м² с удобной мансардой. Отличный вариант для семьи, объединяющий простор и рациональное использование участка в [city|pp].',
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
