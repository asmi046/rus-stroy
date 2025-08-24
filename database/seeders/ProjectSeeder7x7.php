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
                'start_price' => ' 4320000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_154/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_154/p154_photo_1.JPG',
                    '/tmp_data/projects/pr_154/p154_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 482,
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
                'start_price' => ' 4500000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_155/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_155/p155_photo_1.JPG',
                    '/tmp_data/projects/pr_155/p155_photo_2.JPG',
                    '/tmp_data/projects/pr_155/p155_photo_3.JPG',
                    '/tmp_data/projects/pr_155/p155_photo_4.JPG',
                    '/tmp_data/projects/pr_155/p155_photo_5.JPG',
                    '/tmp_data/projects/pr_155/p155_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 502,
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
                'start_price' => ' 3955800 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_156/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_156/p156_photo_1.JPG',
                    '/tmp_data/projects/pr_156/p156_photo_2.JPG',
                    '/tmp_data/projects/pr_156/p156_photo_3.JPG',
                    '/tmp_data/projects/pr_156/p156_photo_4.JPG',
                    '/tmp_data/projects/pr_156/p156_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 572,
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
                'start_price' => ' 4793100 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_157/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_157/p157_photo_1.JPG',
                    '/tmp_data/projects/pr_157/p157_photo_2.JPG',
                    '/tmp_data/projects/pr_157/p157_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 782,
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
                'start_price' => ' 4424400 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_158/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_158/p158_photo_1.JPG',
                    '/tmp_data/projects/pr_158/p158_photo_2.JPG',
                    '/tmp_data/projects/pr_158/p158_photo_3.JPG',
                    '/tmp_data/projects/pr_158/p158_photo_4.JPG',
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
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с мансардой SD-330',
                'img' => '/tmp_data/projects/pr_159/p159_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-mansardoi-sd-330',
                'start_price' => ' 4362950 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_159/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_159/p159_photo_1.JPG',
                    '/tmp_data/projects/pr_159/p159_photo_2.JPG',
                    '/tmp_data/projects/pr_159/p159_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 712,
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
                'start_price' => ' 5776300 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_160/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_160/p160_photo_1.JPG',
                    '/tmp_data/projects/pr_160/p160_photo_2.JPG',
                    '/tmp_data/projects/pr_160/p160_photo_3.JPG',
                    '/tmp_data/projects/pr_160/p160_photo_4.JPG',
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
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Дачный двухэтажный каркасный дом SD-355',
                'img' => '/tmp_data/projects/pr_161/p161_photo_1.JPG',
                'slug' => 'dacnyi-dvuxetaznyi-karkasnyi-dom-sd-355',
                'start_price' => ' 5776300 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_161/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_161/p161_photo_1.JPG',
                    '/tmp_data/projects/pr_161/p161_photo_2.JPG',
                    '/tmp_data/projects/pr_161/p161_photo_3.JPG',
                    '/tmp_data/projects/pr_161/p161_photo_4.JPG',
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
                'plan_dimensions' => '7x7',
                'extension' => null,
            ],

            [
                'title' => 'Уютный двухэтажный каркасный дом SD-356',
                'img' => '/tmp_data/projects/pr_162/p162_photo_1.JPG',
                'slug' => 'uiutnyi-dvuxetaznyi-karkasnyi-dom-sd-356',
                'start_price' => ' 6390800 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_162/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_162/p162_photo_1.JPG',
                    '/tmp_data/projects/pr_162/p162_photo_2.JPG',
                    '/tmp_data/projects/pr_162/p162_photo_3.JPG',
                    '/tmp_data/projects/pr_162/p162_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1042,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7x7',
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
