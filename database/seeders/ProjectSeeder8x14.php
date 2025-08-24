<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x14 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Двухэтажный дом из бруса с сауной SD-273',
                'img' => '/tmp_data/projects/pr_196/p196_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-iz-brusa-s-saunoi-sd-273',
                'start_price' => ' 11700000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_196/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_196/p196_photo_1.JPG',
                    '/tmp_data/projects/pr_196/p196_photo_2.JPG',
                    '/tmp_data/projects/pr_196/p196_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1302,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x14',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом из бревна с тремя спальнями SD-270',
                'img' => '/tmp_data/projects/pr_197/p197_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-iz-brevna-s-tremia-spalniami-sd-270',
                'start_price' => ' 9810000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_197/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_197/p197_photo_1.JPG',
                    '/tmp_data/projects/pr_197/p197_photo_2.JPG',
                    '/tmp_data/projects/pr_197/p197_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1092,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x14',
                'extension' => null,
            ],

            [
                'title' => 'Современный жилой дом с гаражом и тремя спальнями SD-150',
                'img' => '/tmp_data/projects/pr_198/p198_photo_1.JPG',
                'slug' => 'sovremennyi-ziloi-dom-s-garazom-i-tremia-spalniami-sd-150',
                'start_price' => ' 11100000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_198/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_198/p198_photo_1.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_2.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_3.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_4.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_5.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_6.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_7.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_8.JPG',
                    '/tmp_data/projects/pr_198/p198_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1482,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x14',
                'extension' => null,
            ],

            [
                'title' => 'Компактный коттедж на две семьи SD-149',
                'img' => '/tmp_data/projects/pr_199/p199_photo_1.JPG',
                'slug' => 'kompaktnyi-kottedz-na-dve-semi-sd-149',
                'start_price' => ' 11850000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_199/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_199/p199_photo_1.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_2.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_3.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_4.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_5.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_6.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_7.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_8.JPG',
                    '/tmp_data/projects/pr_199/p199_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1582,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x14',
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
