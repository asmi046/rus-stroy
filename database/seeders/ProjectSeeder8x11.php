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
                'start_price' => ' 14175000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_185/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_185/p185_photo_1.JPG',
                    '/tmp_data/projects/pr_185/p185_photo_2.JPG',
                    '/tmp_data/projects/pr_185/p185_photo_3.JPG',
                    '/tmp_data/projects/pr_185/p185_photo_4.JPG',
                    '/tmp_data/projects/pr_185/p185_photo_5.JPG',
                    '/tmp_data/projects/pr_185/p185_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1892,
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
                'start_price' => ' 4670200 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_186/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_186/p186_photo_1.JPG',
                    '/tmp_data/projects/pr_186/p186_photo_2.JPG',
                    '/tmp_data/projects/pr_186/p186_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 762,
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
                'start_price' => ' 4670200 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_187/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_187/p187_photo_1.JPG',
                    '/tmp_data/projects/pr_187/p187_photo_2.JPG',
                    '/tmp_data/projects/pr_187/p187_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 762,
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
                'start_price' => ' 5407600 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_188/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_188/p188_photo_1.JPG',
                    '/tmp_data/projects/pr_188/p188_photo_2.JPG',
                    '/tmp_data/projects/pr_188/p188_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 882,
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
                'start_price' => ' 7558350 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_189/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_189/p189_photo_1.JPG',
                    '/tmp_data/projects/pr_189/p189_photo_2.JPG',
                    '/tmp_data/projects/pr_189/p189_photo_3.JPG',
                    '/tmp_data/projects/pr_189/p189_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1232,
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
                'start_price' => ' 8357200 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_190/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_190/p190_photo_1.JPG',
                    '/tmp_data/projects/pr_190/p190_photo_2.JPG',
                    '/tmp_data/projects/pr_190/p190_photo_3.JPG',
                    '/tmp_data/projects/pr_190/p190_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1362,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x11',
                'extension' => null,
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
                    // 'seo_title' => $seo_data[$i]['seo_title'],
                    // 'seo_description' => $seo_data[$i]['seo_description'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );

            $i++;
        }


    }
}
