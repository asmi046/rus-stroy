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
            ],
            [
                'title' => 'Дом каркасный серии "Барнe" ',
                'img' => '/tmp_data/projects/pr_6/p6_photo_1.JPG',
                'slug' => 'dom-karkasnyi-serii-barne-ploshhadiu-80-kvm',
                'start_price' => 8000000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_6/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_6/p6_photo_1.JPG',
                    '/tmp_data/projects/pr_6/p6_photo_2.JPG',
                    '/tmp_data/projects/pr_6/p6_photo_3.JPG',
                    '/tmp_data/projects/pr_6/p6_photo_4.JPG',
                ],
                'layout' => [
                    '/tmp_data/projects/pr_6/p6_photo_5.JPG',
                ],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 80,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10,5 x 8,5 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом каркасный серии "Барне" площадью 100 кв.м.',
                'img' => '/tmp_data/projects/pr_7/p7_photo_1.JPG',
                'slug' => 'dom-karkasnyi-serii-barnе-ploshhadiu-100-kvm',
                'start_price' => 9000000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_7/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_7/p7_photo_1.JPG',
                    '/tmp_data/projects/pr_7/p7_photo_2.JPG',
                    '/tmp_data/projects/pr_7/p7_photo_3.JPG',
                    '/tmp_data/projects/pr_7/p7_photo_4.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_7/p7_photo_5.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 100,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '12,2 x 9,2 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом серии «Гармония» площадью 80 кв.м.',
                'img' => '/tmp_data/projects/pr_8/p8_photo_1.JPG',
                'slug' => 'dom-serii-garmoniya-ploshhadiu-80-kvm',
                'start_price' => 7800000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_8/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_8/p8_photo_1.JPG',
                    '/tmp_data/projects/pr_8/p8_photo_2.JPG',
                    '/tmp_data/projects/pr_8/p8_photo_3.JPG',
                    '/tmp_data/projects/pr_8/p8_photo_4.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_8/p8_photo_5.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 80,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,9 x 11,02 м',
                'extension' => null,
            ],
            [
                'title' => 'Дом серии «Гармония» площадью 68 кв.м.',
                'img' => '/tmp_data/projects/pr_9/p9_photo_1.JPG',
                'slug' => 'dom-serii-garmoniya-ploshhadiu-68-kvm',
                'start_price' => 7400000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_9/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_9/p9_photo_1.JPG',
                    '/tmp_data/projects/pr_9/p9_photo_2.JPG',
                    '/tmp_data/projects/pr_9/p9_photo_3.JPG',
                    '/tmp_data/projects/pr_9/p9_photo_4.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_9/p9_photo_5.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 68,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,4 x 8,7 м',
                'extension' => null,
            ],
            [
                'title' => 'Дом серии «Гармония» площадью 60 кв.м.',
                'img' => '/tmp_data/projects/pr_10/p10_photo_1.JPG',
                'slug' => 'dom-serii-garmoniya-ploshhadiu-60-kvm',
                'start_price' => 6800000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_10/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_10/p10_photo_1.JPG',
                    '/tmp_data/projects/pr_10/p10_photo_2.JPG',
                    '/tmp_data/projects/pr_10/p10_photo_3.JPG',
                    '/tmp_data/projects/pr_10/p10_photo_4.JPG',
                    '/tmp_data/projects/pr_10/p10_photo_5.JPG',
                    '/tmp_data/projects/pr_10/p10_photo_6.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_10/p10_photo_7.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 60,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10 x 6 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом серии «Гармония» площадью 110 кв.м.',
                'img' => '/tmp_data/projects/pr_11/p11_photo_1.JPG',
                'slug' => 'dom-serii-garmoniya-ploshhadiu-110-kvm',
                'start_price' => 9500000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_11/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_11/p11_photo_1.JPG',
                    '/tmp_data/projects/pr_11/p11_photo_2.JPG',
                    '/tmp_data/projects/pr_11/p11_photo_3.JPG',
                    '/tmp_data/projects/pr_11/p11_photo_4.JPG',
                    '/tmp_data/projects/pr_11/p11_photo_5.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_11/p11_photo_6.JPG'],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 110,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => "Перекрытия",
                'mansard' => false,
                'plan_dimensions' => '9,0 x 7,9 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом "Роща"',
                'img' => '/tmp_data/projects/pr_12/p12_photo_1.JPG',
                'slug' => 'dom-rosha',
                'start_price' => 9450000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_12/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_12/p12_photo_1.JPG',
                    '/tmp_data/projects/pr_12/p12_photo_2.JPG',
                    '/tmp_data/projects/pr_12/p12_photo_3.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_12/p12_photo_4.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 126,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '13,6 x 11,4 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом "Горизонт"',
                'img' => '/tmp_data/projects/pr_13/p13_photo_1.JPG',
                'slug' => 'dom-gorizont',
                'start_price' => 10000000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_13/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_13/p13_photo_1.JPG',
                    '/tmp_data/projects/pr_13/p13_photo_2.JPG',
                    '/tmp_data/projects/pr_13/p13_photo_3.JPG',
                    '/tmp_data/projects/pr_13/p13_photo_4.JPG',
                    '/tmp_data/projects/pr_13/p13_photo_5.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_13/p13_photo_6.JPG'],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 127,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10,9 x 7,8 м',
                'extension' => null,
            ],
            [
                'title' => 'Индивидуальный жилой дом из деревянного каркаса',
                'img' => '/tmp_data/projects/pr_14/p14_photo_1.JPG',
                'slug' => 'individualnyi-ziloi-dom-iz-dereviannogo-karkasa',
                'start_price' => 3870000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_14/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_14/p14_photo_1.JPG',
                    '/tmp_data/projects/pr_14/p14_photo_2.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_14/p14_photo_3.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 43,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '7,8 x 5,6 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Дом "Родник"',
                'img' => '/tmp_data/projects/pr_15/p15_photo_1.JPG',
                'slug' => 'dom-rodnik',
                'start_price' => 8300000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_15/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_15/p15_photo_1.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_15/p15_photo_2.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 104,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Свайный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10,3 x 8,3 м',
                'extension' => null,
            ],
            [
                'title' => 'Индивидуальный жилой дом из деревянного каркаса',
                'img' => '/tmp_data/projects/pr_16/p16_photo_1.JPG',
                'slug' => 'individualnyi-ziloi-dom-iz-dereviannogo-karkasa',
                'start_price' => 8190000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_16/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_16/p16_photo_1.JPG',
                    '/tmp_data/projects/pr_16/p16_photo_2.JPG',
                    '/tmp_data/projects/pr_16/p16_photo_3.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_16/p16_photo_4.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 91,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8,035 x 13,7 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Индивидуальный жилой дом из деревянного каркаса',
                'img' => '/tmp_data/projects/pr_17/p17_photo_1.JPG',
                'slug' => 'individualnyi-ziloi-dom-iz-dereviannogo-karkasa',
                'start_price' => 8640000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_17/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_17/p17_photo_1.JPG',
                    '/tmp_data/projects/pr_17/p17_photo_2.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_17/p17_photo_3.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 962,
                'wall_material' => 'Кирпич',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,7 x 10,8 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Индивидуальный жилой дом из деревянного каркаса',
                'img' => '/tmp_data/projects/pr_18/p18_photo_1.JPG',
                'slug' => 'individualnyi-ziloi-dom-iz-dereviannogo-karkasa',
                'start_price' => 10440000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_18/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_18/p18_photo_1.JPG',
                    '/tmp_data/projects/pr_18/p18_photo_2.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_18/p18_photo_3.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 116,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,0 x 15,0 м',
                'extension' => "Терасса",
            ],
            [
                'title' => 'Индивидуальный жилой дом из деревянного каркаса',
                'img' => '/tmp_data/projects/pr_19/p19_photo_1.JPG',
                'slug' => 'individualnyi-ziloi-dom-iz-dereviannogo-karkasa',
                'start_price' => 9540000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_19/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_19/p19_photo_1.JPG',
                    '/tmp_data/projects/pr_19/p19_photo_3.JPG',
                    '/tmp_data/projects/pr_19/p19_photo_4.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_19/p19_photo_2.JPG',],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 106,
                'wall_material' => 'Кирпич',
                'foundation' => 'Свайный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '5,8 x 8,8 м',
                'extension' => null,
            ],
            [
                'title' => 'Дом "Луч"',
                'img' => '/tmp_data/projects/pr_20/p20_photo_1.JPG',
                'slug' => 'dom-luch',
                'start_price' => 8500000,
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_20/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_20/p20_photo_1.JPG',
                    '/tmp_data/projects/pr_20/p20_photo_2.JPG',
                    '/tmp_data/projects/pr_20/p20_photo_3.JPG',
                    '/tmp_data/projects/pr_20/p20_photo_4.JPG',
                ],
                'layout' => ['/tmp_data/projects/pr_20/p20_photo_5.JPG'],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 91,
                'wall_material' => 'Пеноблок',
                'foundation' => 'Ленточный',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10,3 x 12,5 м',
                'extension' => "Терасса",
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
