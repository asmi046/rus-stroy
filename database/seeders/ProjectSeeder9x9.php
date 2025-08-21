<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder9x9 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Двухэтажный коттедж с балконом SD-161',
                'img' => '/tmp_data/projects/pr_148/p148_photo_1.JPG',
                'slug' => 'dvuxetaznyi-kottedz-s-balkonom-sd-161',
                'start_price' => ' 9825000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_148/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_148/p148_photo_1.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_2.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_3.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_4.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_5.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_6.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_7.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_8.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_9.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_10.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_11.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_12.JPG',
                    '/tmp_data/projects/pr_148/p148_photo_13.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1312,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
                'extension' => null,
            ],

            [
                'title' => 'Современный каркасный дом с кукушкой SD-363',
                'img' => '/tmp_data/projects/pr_149/p149_photo_1.JPG',
                'slug' => 'sovremennyi-karkasnyi-dom-s-kukuskoi-sd-363',
                'start_price' => ' 8971700 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_149/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_149/p149_photo_1.JPG',
                    '/tmp_data/projects/pr_149/p149_photo_2.JPG',
                    '/tmp_data/projects/pr_149/p149_photo_3.JPG',
                    '/tmp_data/projects/pr_149/p149_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1462,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
                'extension' => null,
            ],

            [
                'title' => 'Современный двухэтажный каркасный дом SD-362',
                'img' => '/tmp_data/projects/pr_150/p150_photo_1.JPG',
                'slug' => 'sovremennyi-dvuxetaznyi-karkasnyi-dom-sd-362',
                'start_price' => ' 8664450 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_150/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_150/p150_photo_1.JPG',
                    '/tmp_data/projects/pr_150/p150_photo_2.JPG',
                    '/tmp_data/projects/pr_150/p150_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1412,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный дом с котельной SD-367',
                'img' => '/tmp_data/projects/pr_151/p151_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-dom-s-kotelnoi-sd-367',
                'start_price' => ' 9954900 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_151/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_151/p151_photo_1.JPG',
                    '/tmp_data/projects/pr_151/p151_photo_2.JPG',
                    '/tmp_data/projects/pr_151/p151_photo_3.JPG',
                    '/tmp_data/projects/pr_151/p151_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1622,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
                'extension' => null,
            ],

            [
                'title' => 'Малогабаритный дом с кабинетом на первом этаже SD-045',
                'img' => '/tmp_data/projects/pr_152/p152_photo_1.JPG',
                'slug' => 'malogabaritnyi-dom-s-kabinetom-na-pervom-etaze-sd-045',
                'start_price' => ' 8850000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_152/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_152/p152_photo_1.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_2.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_3.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_4.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_5.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_6.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_7.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_8.JPG',
                    '/tmp_data/projects/pr_152/p152_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1182,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
                'extension' => null,
            ],

            [
                'title' => 'Каркасный двухэтажный дом с мансардным этажом SD-365',
                'img' => '/tmp_data/projects/pr_153/p153_photo_1.JPG',
                'slug' => 'karkasnyi-dvuxetaznyi-dom-s-mansardnym-etazom-sd-365',
                'start_price' => ' 10569400 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_153/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_153/p153_photo_1.JPG',
                    '/tmp_data/projects/pr_153/p153_photo_2.JPG',
                    '/tmp_data/projects/pr_153/p153_photo_3.JPG',
                    '/tmp_data/projects/pr_153/p153_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1722,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x9',
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
