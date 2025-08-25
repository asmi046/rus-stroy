<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder7x10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Небольшой двухэтажный дом для большой семьи SD-323',
                'img' => '/tmp_data/projects/pr_170/p170_photo_1.JPG',
                'slug' => 'nebolsoi-dvuxetaznyi-dom-dlia-bolsoi-semi-sd-323',
                'start_price' => ' 4301500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_170/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_170/p170_photo_1.JPG',
                    '/tmp_data/projects/pr_170/p170_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 702,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],

            [
                'title' => 'Узкий дом с разноуровневой крышей SD-325',
                'img' => '/tmp_data/projects/pr_171/p171_photo_1.JPG',
                'slug' => 'uzkii-dom-s-raznourovnevoi-krysei-sd-325',
                'start_price' => ' 4301500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_171/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_171/p171_photo_1.JPG',
                    '/tmp_data/projects/pr_171/p171_photo_2.JPG',
                    '/tmp_data/projects/pr_171/p171_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 702,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с кукушкой SD-324',
                'img' => '/tmp_data/projects/pr_172/p172_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-kukuskoi-sd-324',
                'start_price' => ' 4301500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_172/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_172/p172_photo_1.JPG',
                    '/tmp_data/projects/pr_172/p172_photo_2.JPG',
                    '/tmp_data/projects/pr_172/p172_photo_3.JPG',
                    '/tmp_data/projects/pr_172/p172_photo_4.JPG',
                    '/tmp_data/projects/pr_172/p172_photo_5.JPG',
                    '/tmp_data/projects/pr_172/p172_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 702,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],

            [
                'title' => 'Проект дома для всей семьи SD-078',
                'img' => '/tmp_data/projects/pr_173/p173_photo_1.JPG',
                'slug' => 'proekt-doma-dlia-vsei-semi-sd-078',
                'start_price' => ' 8325000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_173/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_173/p173_photo_1.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_2.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_3.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_4.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_5.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_6.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_7.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_8.JPG',
                    '/tmp_data/projects/pr_173/p173_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1112,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],

            [
                'title' => 'Загородный коттедж с мансардой для небольшого участка SD-151',
                'img' => '/tmp_data/projects/pr_174/p174_photo_1.JPG',
                'slug' => 'zagorodnyi-kottedz-s-mansardoi-dlia-nebolsogo-ucastka-sd-151',
                'start_price' => ' 8700000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_174/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_174/p174_photo_1.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_2.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_3.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_4.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_5.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_6.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_7.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_8.JPG',
                    '/tmp_data/projects/pr_174/p174_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1162,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],
            [
                'title' => 'Дом из бревна с мансардным этажом и четырьмя спальнями  SD-277',
                'img' => '/tmp_data/projects/pr_175/p175_photo_1.JPG',
                'slug' => 'dom-iz-brevna-s-mansardnym-etazom-i-cetyrmia-spalniami-sd-277',
                'start_price' => ' 9630000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_175/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_175/p175_photo_1.JPG',
                    '/tmp_data/projects/pr_175/p175_photo_2.JPG',
                    '/tmp_data/projects/pr_175/p175_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1072,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],

            [
                'title' => 'Малогабаритный коттедж для узкого участка SD-186',
                'img' => '/tmp_data/projects/pr_176/p176_photo_1.JPG',
                'slug' => 'malogabaritnyi-kottedz-dlia-uzkogo-ucastka-sd-186',
                'start_price' => ' 7650000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_176/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_176/p176_photo_1.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_2.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_3.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_4.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_5.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_6.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_7.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_8.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_9.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_10.JPG',
                    '/tmp_data/projects/pr_176/p176_photo_11.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1022,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x10',
                'extension' => null,
            ],
        ];

        $seo_data = [
    [
        'seo_title' => 'Небольшой двухэтажный дом SD-323 – проект для большой семьи',
        'seo_description' => 'Проект SD-323 – уютный двухэтажный дом из газобетона для большой семьи. Общая площадь 702 м², современная планировка, высокие потолки и комфортное пространство для жизни.',
    ],
    [
        'seo_title' => 'Узкий дом SD-325 с разноуровневой крышей – современный проект',
        'seo_description' => 'Проект SD-325 – компактный одноэтажный дом из профилированного бруса с оригинальной разноуровневой крышей. Площадь 702 м², стильный дизайн и уютное пространство для проживания.',
    ],
    [
        'seo_title' => 'Двухэтажный дом SD-324 с кукушкой – стильный проект из бруса',
        'seo_description' => 'Проект SD-324 – просторный двухэтажный дом из профилированного бруса с кукушкой. Общая площадь 702 м², гармоничные фасады и комфортная планировка для семьи.',
    ],
    [
        'seo_title' => 'Проект дома SD-078 для всей семьи – современный коттедж',
        'seo_description' => 'Проект SD-078 – большой двухэтажный дом из газобетона для комфортной жизни. Площадь 1112 м², стильная архитектура и просторные комнаты для всей семьи.',
    ],
    [
        'seo_title' => 'Загородный коттедж SD-151 с мансардой – проект для небольшого участка',
        'seo_description' => 'Проект SD-151 – современный загородный дом из газобетона с мансардным этажом. Общая площадь 1162 м², элегантный фасад и удобная планировка.',
    ],
    [
        'seo_title' => 'Дом из бревна SD-277 с мансардой и четырьмя спальнями',
        'seo_description' => 'Проект SD-277 – уютный двухэтажный дом из оцилиндрованного бревна с мансардным этажом. Площадь 1072 м², четыре спальни и функциональная планировка.',
    ],
    [
        'seo_title' => 'Малогабаритный коттедж SD-186 для узкого участка',
        'seo_description' => 'Проект SD-186 – современный двухэтажный коттедж из газобетона. Площадь 1022 м², компактные решения и стильный фасад идеально подойдут для узких участков.',
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
