<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder9x11 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Красивый одноэтажный дом с террасой КС-04/1',
                'img' => '/tmp_data/projects/pr_200/p200_photo_1.JPG',
                'slug' => 'krasivyi-odnoetaznyi-dom-s-terrasoi-ks-041',
                'start_price' => ' 7395000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_200/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_200/p200_photo_1.JPG',
                    '/tmp_data/projects/pr_200/p200_photo_2.JPG',
                    '/tmp_data/projects/pr_200/p200_photo_3.JPG',
                    '/tmp_data/projects/pr_200/p200_photo_4.JPG',
                    '/tmp_data/projects/pr_200/p200_photo_5.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 1162,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x11',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный дом в традиционном стиле SD-043',
                'img' => '/tmp_data/projects/pr_201/p201_photo_1.JPG',
                'slug' => 'odnoetaznyi-dom-v-tradicionnom-stile-sd-043',
                'start_price' => ' 5610000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_201/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_201/p201_photo_1.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_2.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_3.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_4.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_5.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_6.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_7.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_8.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_9.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_10.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_11.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_12.JPG',
                    '/tmp_data/projects/pr_201/p201_photo_13.JPG',
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
                'plan_dimensions' => '9x11',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с кукушкой SD-250',
                'img' => '/tmp_data/projects/pr_202/p202_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-kukuskoi-sd-250',
                'start_price' => ' 7395000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_202/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_202/p202_photo_1.JPG',
                    '/tmp_data/projects/pr_202/p202_photo_2.JPG',
                    '/tmp_data/projects/pr_202/p202_photo_3.JPG',
                    '/tmp_data/projects/pr_202/p202_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1162,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x11',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом в классическом стиле SD-288',
                'img' => '/tmp_data/projects/pr_203/p203_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-v-klassiceskom-stile-sd-288',
                'start_price' => ' 11283750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_203/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_203/p203_photo_1.JPG',
                    '/tmp_data/projects/pr_203/p203_photo_2.JPG',
                    '/tmp_data/projects/pr_203/p203_photo_3.JPG',
                    '/tmp_data/projects/pr_203/p203_photo_4.JPG',
                    '/tmp_data/projects/pr_203/p203_photo_5.JPG',
                    '/tmp_data/projects/pr_203/p203_photo_6.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1772,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x11',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Красивый одноэтажный дом с террасой КС-04/1 – строительство в [city|pp]',
                'seo_description' => 'Проект одноэтажного дома из Газобетон площадью 1162 м². Удобное и современное решение для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Одноэтажный дом в традиционном стиле SD-043 – строительство в [city|pp]',
                'seo_description' => 'Проект одноэтажного дома из Газобетон площадью 882 м². Удобное и современное решение для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом с кукушкой SD-250 – строительство в [city|pp]',
                'seo_description' => 'Проект двухэтажного дома из Газобетон площадью 1162 м². Удобное и современное решение для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом в классическом стиле SD-288 – строительство в [city|pp]',
                'seo_description' => 'Проект двухэтажного дома из Газобетон площадью 1772 м². Удобное и современное решение для жизни в [city|pp].',
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
