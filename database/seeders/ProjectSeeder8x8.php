<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Уютный каркасный дом для большой семьи SD-358',
                'img' => '/tmp_data/projects/pr_118/p118_photo_1.JPG',
                'slug' => 'uiutnyi-karkasnyi-dom-dlia-bolsoi-semi-sd-358',
                'start_price' => ' 6206450 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_118/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_118/p118_photo_1.JPG',
                    '/tmp_data/projects/pr_118/p118_photo_2.JPG',
                    '/tmp_data/projects/pr_118/p118_photo_3.JPG',
                    '/tmp_data/projects/pr_118/p118_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1012,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный коттедж с балконом SD-368',
                'img' => '/tmp_data/projects/pr_120/p120_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-kottedz-s-balkonom-sd-368',
                'start_price' => ' 7865600 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_120/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_120/p120_photo_1.JPG',
                    '/tmp_data/projects/pr_120/p120_photo_2.JPG',
                    '/tmp_data/projects/pr_120/p120_photo_3.JPG',
                    '/tmp_data/projects/pr_120/p120_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1282,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x8',
                'extension' => null,
            ],



            [
                'title' => 'Аккуратный классический дом с двухскатной крышей SD-047',
                'img' => '/tmp_data/projects/pr_122/p122_photo_1.JPG',
                'slug' => 'akkuratnyi-klassiceskii-dom-s-dvuxskatnoi-krysei-sd-047',
                'start_price' => ' 8250000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_122/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_122/p122_photo_1.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_2.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_3.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_4.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_5.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_6.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_7.JPG',
                    '/tmp_data/projects/pr_122/p122_photo_8.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1102,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный дом с камином SD-369',
                'img' => '/tmp_data/projects/pr_123/p123_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-dom-s-kaminom-sd-369',
                'start_price' => ' 7865600 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_123/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_123/p123_photo_1.JPG',
                    '/tmp_data/projects/pr_123/p123_photo_2.JPG',
                    '/tmp_data/projects/pr_123/p123_photo_3.JPG',
                    '/tmp_data/projects/pr_123/p123_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1282,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x8',
                'extension' => null,
            ],

            [
                'title' => 'Коттедж с мансардой и террасой SD-157',
                'img' => '/tmp_data/projects/pr_124/p124_photo_1.JPG',
                'slug' => 'kottedz-s-mansardoi-i-terrasoisd-157',
                'start_price' => ' 6900000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_124/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_124/p124_photo_1.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_2.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_3.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_4.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_5.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_6.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_7.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_8.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_9.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_10.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_11.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_12.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_13.JPG',
                    '/tmp_data/projects/pr_124/p124_photo_14.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 922,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x8',
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
