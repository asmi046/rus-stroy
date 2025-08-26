<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x11 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Двухэтажный дом с гардеробной и постирочной комнатой  SD-257',
                'img' => '/tmp_data/projects/pr_185/p185_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-garderobnoi-i-postirocnoi-komnatoi-sd-257',
                'start_price' => ' 12048750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_185/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_185/p185_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_185/p185_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_185/p185_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_185/p185_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_185/p185_photo_5.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_185/p185_photo_6.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 189,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный компактный дом из газобетона SD-375',
                'img' => '/tmp_data/projects/pr_186/p186_photo_1.JPG',
                'slug' => 'odnoetaznyi-kompaktnyi-dom-iz-gazobetona-sd-375',
                'start_price' => ' 3969670 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_186/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_186/p186_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_186/p186_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_186/p186_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 76,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный коттедж из газобетона SD-376',
                'img' => '/tmp_data/projects/pr_187/p187_photo_1.JPG',
                'slug' => 'odnoetaznyi-kottedz-iz-gazobetona-sd-376',
                'start_price' => ' 3969670 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_187/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_187/p187_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_187/p187_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_187/p187_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 76,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный дачный дом из газобетона SD-374',
                'img' => '/tmp_data/projects/pr_188/p188_photo_1.JPG',
                'slug' => 'odnoetaznyi-dacnyi-dom-iz-gazobetona-sd-374',
                'start_price' => ' 4596460 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_188/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_188/p188_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_188/p188_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_188/p188_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 88,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],

            [
                'title' => 'Дом из газобетона с мансардой и эркером SD-377',
                'img' => '/tmp_data/projects/pr_189/p189_photo_1.JPG',
                'slug' => 'dom-iz-gazobetona-s-mansardoi-i-erkerom-sd-377',
                'start_price' => ' 6424600 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_189/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_189/p189_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_189/p189_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_189/p189_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_189/p189_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 123,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],

            [
                'title' => 'двухэтажный дом из газобетона с гаражом SD-378',
                'img' => '/tmp_data/projects/pr_190/p190_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-iz-gazobetona-s-garazom-sd-378',
                'start_price' => ' 7103620 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_190/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_190/p190_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_190/p190_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_190/p190_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_190/p190_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 136,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Двухэтажный дом с гардеробной SD-257 – строительство в [city|pp]',
                'seo_description' => 'Современный двухэтажный дом из газобетона площадью 189 м² с гардеробной и постирочной комнатой. Удобное решение для семьи, доступное для реализации в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный компактный дом SD-375 – проект в [city|pp]',
                'seo_description' => 'Уютный одноэтажный дом из газобетона площадью 76 м². Практичное и доступное решение для строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный коттедж из газобетона SD-376 – строительство в [city|pp]',
                'seo_description' => 'Комфортный одноэтажный коттедж площадью 76 м² из газобетона. Отличный выбор для загородной жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный дачный дом SD-374 – проект под ключ в [city|pp]',
                'seo_description' => 'Просторный одноэтажный дачный дом из газобетона площадью 88 м². Подходит для сезонного и постоянного проживания в [city|pp].',
            ],
            [
                'seo_title' => 'Дом из газобетона с мансардой SD-377 – строительство в [city|pp]',
                'seo_description' => 'Двухэтажный дом с мансардой и эркером, площадь 123 м². Эстетика и функциональность из газобетона для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом с гаражом SD-378 – проект в [city|pp]',
                'seo_description' => 'Современный дом из газобетона площадью 136 м² с удобным встроенным гаражом. Практичное решение для строительства в [city|pp].',
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
