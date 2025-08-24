<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x12 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Уютный одноэтажный домик с двумя спальнями SD-093',
                'img' => '/tmp_data/projects/pr_191/p191_photo_1.JPG',
                'slug' => 'uiutnyi-odnoetaznyi-domik-s-dvumia-spalniami-sd-093',
                'start_price' => ' 5550000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_191/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_191/p191_photo_1.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_2.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_3.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_4.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_5.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_6.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_7.JPG',
                    '/tmp_data/projects/pr_191/p191_photo_8.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 742,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный дом с террасой SD-347',
                'img' => '/tmp_data/projects/pr_192/p192_photo_1.JPG',
                'slug' => 'odnoetaznyi-dom-s-terrasoi-sd-347',
                'start_price' => ' 6900000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_192/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_192/p192_photo_1.JPG',
                    '/tmp_data/projects/pr_192/p192_photo_2.JPG',
                    '/tmp_data/projects/pr_192/p192_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 922,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
                'extension' => null,
            ],

            [
                'title' => 'Уютный домик в стиле прованс SD-346',
                'img' => '/tmp_data/projects/pr_193/p193_photo_1.JPG',
                'slug' => 'uiutnyi-domik-v-stile-provans-sd-346',
                'start_price' => ' 5038900 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_193/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_193/p193_photo_1.JPG',
                    '/tmp_data/projects/pr_193/p193_photo_2.JPG',
                    '/tmp_data/projects/pr_193/p193_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 822,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с баней SD-252',
                'img' => '/tmp_data/projects/pr_194/p194_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-banei-sd-252',
                'start_price' => ' 10800000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_194/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_194/p194_photo_1.JPG',
                    '/tmp_data/projects/pr_194/p194_photo_2.JPG',
                    '/tmp_data/projects/pr_194/p194_photo_3.JPG',
                    '/tmp_data/projects/pr_194/p194_photo_4.JPG',
                    '/tmp_data/projects/pr_194/p194_photo_5.JPG',
                    '/tmp_data/projects/pr_194/p194_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1442,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
                'extension' => null,
            ],

            [
                'title' => 'Классический коттедж с комнатой на первом этаже SD-051',
                'img' => '/tmp_data/projects/pr_195/p195_photo_1.JPG',
                'slug' => 'klassiceskii-kottedz-s-komnatoi-na-pervom-etaze-sd-051',
                'start_price' => ' 10350000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_195/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_195/p195_photo_1.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_2.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_3.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_4.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_5.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_6.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_7.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_8.JPG',
                    '/tmp_data/projects/pr_195/p195_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1382,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
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
