<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder10x10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Современный одноэтажный каркасный дом SD-364',
                'img' => '/tmp_data/projects/pr_136/p136_photo_1.JPG',
                'slug' => 'sovremennyi-odnoetaznyi-karkasnyi-dom-sd-364',
                'start_price' => ' 6145000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_136/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_136/p136_photo_1.JPG',
                    '/tmp_data/projects/pr_136/p136_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 1002,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный каркасный дом с террасой SD-357',
                'img' => '/tmp_data/projects/pr_137/p137_photo_1.JPG',
                'slug' => 'odnoetaznyi-karkasnyi-dom-s-terrasoi-sd-357',
                'start_price' => ' 6022100 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_137/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_137/p137_photo_1.JPG',
                    '/tmp_data/projects/pr_137/p137_photo_2.JPG',
                    '/tmp_data/projects/pr_137/p137_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 982,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Компактный мансардный коттедж с фасадом приятного вида SD-100',
                'img' => '/tmp_data/projects/pr_138/p138_photo_1.JPG',
                'slug' => 'kompaktnyi-mansardnyi-kottedz-s-fasadom-priiatnogo-vida-sd-100',
                'start_price' => ' 10050000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_138/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_138/p138_photo_1.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_2.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_3.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_4.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_5.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_6.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_7.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_8.JPG',
                    '/tmp_data/projects/pr_138/p138_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1342,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Дом из бревна с мансардным этажом SD-266',
                'img' => '/tmp_data/projects/pr_139/p139_photo_1.JPG',
                'slug' => 'dom-iz-brevna-s-mansardnym-etazom-sd-266',
                'start_price' => ' 9000000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_139/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_139/p139_photo_1.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_2.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_3.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_4.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_5.JPG',
                    '/tmp_data/projects/pr_139/p139_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1002,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный каркасный дом в стиле хай-тек SD-366',
                'img' => '/tmp_data/projects/pr_140/p140_photo_1.JPG',
                'slug' => 'dvuxetaznyi-karkasnyi-dom-v-stile-xai-tek-sd-366',
                'start_price' => ' 10077800 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_140/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_140/p140_photo_1.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_2.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_3.JPG',
                    '/tmp_data/projects/pr_140/p140_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1642,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
                'extension' => null,
            ],

            [
                'title' => 'Стильный коттедж с жилой мансардой SD-200',
                'img' => '/tmp_data/projects/pr_141/p141_photo_1.JPG',
                'slug' => 'stilnyi-kottedz-s-ziloi-mansardoi-sd-200',
                'start_price' => ' 10725000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_141/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_141/p141_photo_1.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_2.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_3.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_4.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_5.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_6.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_7.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_8.JPG',
                    '/tmp_data/projects/pr_141/p141_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1432,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x10',
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
