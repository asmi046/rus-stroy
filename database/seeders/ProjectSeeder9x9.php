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

        $seo_data = [
            [
                'seo_title' => 'Двухэтажный коттедж с балконом SD-161 – строительство домов',
                'seo_description' => 'Проект современного двухэтажного коттеджа площадью 1312 м² с просторным балконом. Дом из газобетона отличается продуманной планировкой и комфортной высотой потолков 2,5 м, идеально подходит для постоянного проживания семьи.',
            ],
            [
                'seo_title' => 'Современный каркасный дом с кукушкой SD-363 – проектирование и строительство',
                'seo_description' => 'Стильный двухэтажный дом площадью 1462 м², выполненный по каркасной технологии. Архитектурный акцент — оригинальная кукушка, которая придает фасаду выразительность. Газобетонные стены обеспечивают надежность и энергоэффективность.',
            ],
            [
                'seo_title' => 'Современный двухэтажный каркасный дом SD-362 – надежное строительство',
                'seo_description' => 'Функциональный дом площадью 1412 м², рассчитанный на комфортное проживание семьи. Каркасная технология в сочетании с газобетонными стенами делает проект надежным и долговечным, а современный фасад подчеркивает актуальный стиль.',
            ],
            [
                'seo_title' => 'Двухэтажный каркасный дом с котельной SD-367 – готовый проект под ключ',
                'seo_description' => 'Просторный дом общей площадью 1622 м² с отдельным помещением под котельную. Проект сочетает удобство планировок и энергоэффективные материалы. Газобетонные стены и два этажа создают надежную основу для комфортного проживания.',
            ],
            [
                'seo_title' => 'Малогабаритный дом с кабинетом на первом этаже SD-045 – проект и строительство',
                'seo_description' => 'Компактный двухэтажный дом площадью 1182 м², где на первом этаже предусмотрен удобный кабинет. Газобетонные стены и продуманная планировка делают этот проект практичным решением для небольшой семьи или дачного использования.',
            ],
            [
                'seo_title' => 'Каркасный двухэтажный дом с мансардным этажом SD-365 – строительство современных домов',
                'seo_description' => 'Уютный и просторный дом площадью 1722 м² с мансардным этажом. Проект выполнен с использованием газобетона, что обеспечивает долговечность и энергоэффективность. Отличный вариант для тех, кто ценит современный стиль и функциональность.',
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
