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
                'start_price' => ' 4717500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_191/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_191/p191_photo_7.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_191/p191_photo_8.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 74,
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
                'start_price' => ' 5865000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_192/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_192/p192_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_192/p192_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_192/p192_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 92,
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
                'start_price' => ' 4283065 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_193/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_193/p193_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_193/p193_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_193/p193_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 82,
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
                'start_price' => ' 9180000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_194/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_194/p194_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_194/p194_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_194/p194_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_194/p194_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_194/p194_photo_5.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_194/p194_photo_6.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 144,
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
                'start_price' => ' 8797500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_195/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_195/p195_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_195/p195_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 138,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x12',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Уютный одноэтажный домик с двумя спальнями SD-093 – строительство в [city|pp]',
                'seo_description' => 'Компактный одноэтажный дом площадью 74 м² из газобетона. Удобное решение с двумя спальнями для комфортного проживания семьи, доступное для реализации в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный дом с террасой SD-347 – проект в [city|pp]',
                'seo_description' => 'Проект одноэтажного дома площадью 92 м² из профилированного бруса с уютной террасой. Стильное и практичное решение для строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Уютный домик в стиле прованс SD-346 – строительство в [city|pp]',
                'seo_description' => 'Одноэтажный дом площадью 82 м² из газобетона, выполненный в стиле прованс. Эстетика и функциональность для комфортной жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом с баней SD-252 – проект под ключ в [city|pp]',
                'seo_description' => 'Просторный дом площадью 144 м² из профилированного бруса с собственной баней. Отличное решение для семейного отдыха и постоянного проживания в [city|pp].',
            ],
            [
                'seo_title' => 'Классический коттедж с комнатой на первом этаже SD-051 – строительство в [city|pp]',
                'seo_description' => 'Двухэтажный коттедж площадью 138 м² из газобетона с удобной планировкой и комнатой на первом этаже. Классическое решение для комфортной жизни в [city|pp].',
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
