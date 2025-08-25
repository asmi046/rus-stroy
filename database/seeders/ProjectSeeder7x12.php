<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder7x12 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Двухэтажный дом с баней SD-156',
                'img' => '/tmp_data/projects/pr_177/p177_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-banei-sd-156',
                'start_price' => ' 7125000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_177/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_177/p177_photo_1.JPG',
                    '/tmp_data/projects/pr_177/p177_photo_2.JPG',
                    '/tmp_data/projects/pr_177/p177_photo_3.JPG',
                    '/tmp_data/projects/pr_177/p177_photo_4.JPG',
                    '/tmp_data/projects/pr_177/p177_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 952,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x12',
                'extension' => null,
            ],

            [
                'title' => 'Мансардный дом с большими стильными окнами SD-217',
                'img' => '/tmp_data/projects/pr_178/p178_photo_1.JPG',
                'slug' => 'mansardnyi-dom-s-bolsimi-stilnymi-oknami-sd-217',
                'start_price' => ' 8325000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_178/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_178/p178_photo_1.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_2.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_3.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_4.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_5.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_6.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_7.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_8.JPG',
                    '/tmp_data/projects/pr_178/p178_photo_9.JPG',
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
                'plan_dimensions' => '7x12',
                'extension' => null,
            ],

            [
                'title' => 'Коттедж с навесом для 1 автомобиля SD-089',
                'img' => '/tmp_data/projects/pr_179/p179_photo_1.JPG',
                'slug' => 'kottedz-s-navesom-dlia-1-avtomobilia-sd-089',
                'start_price' => ' 7425000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_179/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_179/p179_photo_1.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_2.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_3.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_4.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_5.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_6.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_7.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_8.JPG',
                    '/tmp_data/projects/pr_179/p179_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 992,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x12',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом, адаптированный под узкий участок SD-095',
                'img' => '/tmp_data/projects/pr_180/p180_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-adaptirovannyi-pod-uzkii-ucastok-sd-095',
                'start_price' => ' 8400000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_180/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_180/p180_photo_1.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_2.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_3.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_4.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_5.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_6.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_7.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_8.JPG',
                    '/tmp_data/projects/pr_180/p180_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1122,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x12',
                'extension' => null,
            ],
        ];

        $seo_data = [
    [
        'seo_title' => 'Двухэтажный дом с баней SD-156 – проект и строительство в [city|pp]',
        'seo_description' => 'Современный дом площадью 952 м² из газобетона. Двухэтажный проект с баней для комфортной жизни. Заказывайте строительство в [city|pp].',
    ],
    [
        'seo_title' => 'Мансардный дом с большими окнами SD-217 – заказать в [city|pp]',
        'seo_description' => 'Стильный двухэтажный дом площадью 1112 м² из газобетона. Панорамные окна создают светлое и просторное пространство. Реализуем строительство в [city|pp].',
    ],
    [
        'seo_title' => 'Коттедж с навесом для авто SD-089 – проект под ключ в [city|pp]',
        'seo_description' => 'Функциональный двухэтажный коттедж площадью 992 м² из газобетона. Удобный навес для автомобиля и современный дизайн. Доступно строительство в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом для узкого участка SD-095 – строительство в [city|pp]',
        'seo_description' => 'Просторный проект дома площадью 1122 м², адаптированный под узкий участок. Газобетонные стены, рациональная планировка и комфорт для семьи в [city|pp].',
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
