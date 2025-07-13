<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Проект дома "Маршак"',
                'img' => '/tmp_data/projects/pr_1/p1_main.jpeg',
                'slug' => 'proekt-doma-marshak',
                'start_price' => 5990000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_1/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_1/p1_photo_1.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_2.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_3.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_4.jpeg'
                ],
                'layout' => [
                    '/tmp_data/projects/pr_1/p1_plan_1.jpeg',
                ],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 68,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный фундамент',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,4 x 8,7 м',
                'extension' => null,

            ],
            [
                'title' => 'Проект дома  "Блок"',
                'img' => '/tmp_data/projects/pr_2/p2_photo_1.JPG',
                'slug' => 'proekt-doma-blok',
                'start_price' => 7300000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_2/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_2/p2_photo_1.JPG',
                    '/tmp_data/projects/pr_2/p2_photo_2.JPG',
                    '/tmp_data/projects/pr_2/p2_photo_3.JPG',
                    '/tmp_data/projects/pr_2/p2_photo_4.JPG',
                    '/tmp_data/projects/pr_2/p2_photo_5.JPG',

                ],
                'layout' => [
                    '/tmp_data/projects/pr_2/p2_photo_6.JPG',
                ],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 80,
                'wall_material' => '',
                'foundation' => 'Плитный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '11 x 9,9 м',
                'extension' => null,
            ],

            [
                'title' => 'Проект дома "Идилия"',
                'img' => '/tmp_data/projects/pr_3/p3_photo_1.JPG',
                'slug' => 'proekt-doma-idiliya',
                'start_price' => 6500000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_3/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_3/p3_photo_1.JPG',
                    '/tmp_data/projects/pr_3/p3_photo_2.JPG',
                    '/tmp_data/projects/pr_3/p3_photo_3.JPG',
                    '/tmp_data/projects/pr_3/p3_photo_4.JPG',
                    '/tmp_data/projects/pr_3/p3_photo_5.JPG',

                ],
                'layout' => [
                    '/tmp_data/projects/pr_3/p3_photo_6.JPG',
                ],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 94,
                'wall_material' => '',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => true,
                'plan_dimensions' => '8,8 x 6,8 м',
                'extension' => 'Терасса',
            ],

            [
                'title' => 'Проект дома "Мечта поэта"',
                'img' => '/tmp_data/projects/pr_4/p4_photo_1.JPG',
                'slug' => 'proekt-doma-mechta-poeta',
                'start_price' => 8500000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_4/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_4/p4_photo_1.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_2.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_3.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_4.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_5.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_6.JPG',
                    '/tmp_data/projects/pr_4/p4_photo_7.JPG',
                ],
                'layout' => [
                    '/tmp_data/projects/pr_4/p4_photo_8.JPG',
                ],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 98,
                'wall_material' => 'Пеноблок',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => "Деревянные перекрытия",
                'mansard' => true,
                'plan_dimensions' => '7,6 x 7,9 м',
                'extension' => null,
            ],

            [
                'title' => 'Дом каркасный серии "Барнэо" ',
                'img' => '/tmp_data/projects/pr_5/p5_photo_1.JPG',
                'slug' => 'dom-karkasnyi-serii-barn-ploshhadiu-94-kvm',
                'start_price' => 8500000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_5/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_5/p5_photo_1.JPG',
                    '/tmp_data/projects/pr_5/p5_photo_2.JPG',
                ],
                'layout' => [
                    '/tmp_data/projects/pr_5/p5_photo_3.JPG',
                ],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 94,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => 'Деревянные балки',
                'mansard' => false,
                'plan_dimensions' => '6,9 x 7,2 м',
                'extension' => null,
            ]
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
