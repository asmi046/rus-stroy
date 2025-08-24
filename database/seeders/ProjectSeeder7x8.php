<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder7x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Компактный дом с мансардой и двухскатной крышей SD-079',
                'img' => '/tmp_data/projects/pr_163/p163_photo_1.JPG',
                'slug' => 'kompaktnyi-dom-s-mansardoi-i-dvuxskatnoi-krysei-sd-079',
                'start_price' => ' 7050000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_163/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_163/p163_photo_1.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_2.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_3.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_4.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_5.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_6.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_7.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_8.JPG',
                    '/tmp_data/projects/pr_163/p163_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 942,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Светлый дом с крыльцом и террасой для всей семьи SD-331',
                'img' => '/tmp_data/projects/pr_164/p164_photo_1.JPG',
                'slug' => 'svetlyi-dom-s-krylcom-i-terrasoi-dlia-vsei-semi-sd-331',
                'start_price' => ' 7374000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_164/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_164/p164_photo_1.JPG',
                    '/tmp_data/projects/pr_164/p164_photo_2.JPG',
                    '/tmp_data/projects/pr_164/p164_photo_3.JPG',
                    '/tmp_data/projects/pr_164/p164_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1202,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Светлый дом с кукушкой SD-333',
                'img' => '/tmp_data/projects/pr_165/p165_photo_1.JPG',
                'slug' => 'svetlyi-dom-s-kukuskoi-sd-333',
                'start_price' => ' 6145000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_165/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_165/p165_photo_1.JPG',
                    '/tmp_data/projects/pr_165/p165_photo_2.JPG',
                    '/tmp_data/projects/pr_165/p165_photo_3.JPG',
                    '/tmp_data/projects/pr_165/p165_photo_4.JPG',
                    '/tmp_data/projects/pr_165/p165_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1002,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с балконом SD-332',
                'img' => '/tmp_data/projects/pr_166/p166_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-balkonom-sd-332',
                'start_price' => ' 5223250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_166/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_166/p166_photo_1.JPG',
                    '/tmp_data/projects/pr_166/p166_photo_2.JPG',
                    '/tmp_data/projects/pr_166/p166_photo_3.JPG',
                    '/tmp_data/projects/pr_166/p166_photo_4.JPG',
                    '/tmp_data/projects/pr_166/p166_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 852,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с террасой SD-336',
                'img' => '/tmp_data/projects/pr_167/p167_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-terrasoi-sd-336',
                'start_price' => ' 4178600 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_167/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_167/p167_photo_1.JPG',
                    '/tmp_data/projects/pr_167/p167_photo_2.JPG',
                    '/tmp_data/projects/pr_167/p167_photo_3.JPG',
                    '/tmp_data/projects/pr_167/p167_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 682,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Большой дом с эркером SD-334',
                'img' => '/tmp_data/projects/pr_168/p168_photo_1.JPG',
                'slug' => 'bolsoi-dom-s-erkerom-sd-334',
                'start_price' => ' 6329350 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_168/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_168/p168_photo_1.JPG',
                    '/tmp_data/projects/pr_168/p168_photo_2.JPG',
                    '/tmp_data/projects/pr_168/p168_photo_3.JPG',
                    '/tmp_data/projects/pr_168/p168_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1032,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с сауной SD-335',
                'img' => '/tmp_data/projects/pr_169/p169_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-saunoi-sd-335',
                'start_price' => ' 5284700 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_169/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_169/p169_photo_1.JPG',
                    '/tmp_data/projects/pr_169/p169_photo_2.JPG',
                    '/tmp_data/projects/pr_169/p169_photo_3.JPG',
                    '/tmp_data/projects/pr_169/p169_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 862,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x8',
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
