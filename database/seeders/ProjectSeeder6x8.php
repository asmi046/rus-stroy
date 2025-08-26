<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder6x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажный дом с панорамными окнами для небольшого участка SD-302',
                'img' => '/tmp_data/projects/pr_107/p107_photo_1.JPG',
                'slug' => 'odnoetaznyi-dom-s-panoramnymi-oknami-dlia-nebolsogo-ucastka-Sd-302',
                'start_price' => ' 4021903 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_107/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_107/p107_photo_1.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_107/p107_photo_2.JPG'],],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 77,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Дом с  мансардным этажом и  балконом SD-318',
                'img' => '/tmp_data/projects/pr_108/p108_photo_1.JPG',
                'slug' => 'dom-s-mansardnym-etazom-i-balkonom-sd-318',
                'start_price' => ' 5014320 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_108/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_108/p108_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_108/p108_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_108/p108_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 96,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Дом с мансардным этажом и разноуровневой крышей SD-313',
                'img' => '/tmp_data/projects/pr_109/p109_photo_1.JPG',
                'slug' => 'dom-s-mansardnym-etazom-i-raznourovnevoi-krysei-sd-313',
                'start_price' => ' 3708508 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_109/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_109/p109_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_109/p109_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_109/p109_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_109/p109_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 71,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с эркером и гаражом  SD-300',
                'img' => '/tmp_data/projects/pr_110/p110_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-erkerom-i-garazom-sd-300',
                'start_price' => ' 8043805 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_110/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_110/p110_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_110/p110_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_110/p110_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 154,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с четырьмя спальнями и гаражом  SD-301',
                'img' => '/tmp_data/projects/pr_111/p111_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-cetyrmia-spalniami-i-garazom-sd-301',
                'start_price' => ' 5066553 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_111/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_111/p111_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_111/p111_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_111/p111_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 97,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом для небольшого участка с постирочной SD-299',
                'img' => '/tmp_data/projects/pr_112/p112_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-dlia-nebolsogo-ucastka-s-postirocnoi-Sd-299',
                'start_price' => ' 5275483 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_112/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_112/p112_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_112/p112_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_112/p112_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 101,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

        ];

        $seo_data = [
    [
        'seo_title' => 'Одноэтажный дом SD-302 с панорамными окнами – проект для строительства в [city|pp]',
        'seo_description' => 'Проект SD-302 – современный одноэтажный дом из газобетона площадью 77 м². Панорамные окна наполняют интерьер светом, а компактные размеры делают его отличным выбором для небольшого участка в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с мансардным этажом и балконом SD-318 – стильный проект в [city|pp]',
        'seo_description' => 'SD-318 – просторный двухэтажный дом площадью 96 м². Мансардный этаж, удобный балкон и современная планировка обеспечивают уют и функциональность. Подходит для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с мансардным этажом и крышей сложной формы SD-313 – проект под [city|pp]',
        'seo_description' => 'Проект SD-313 – изящный дом из газобетона площадью 71 м². Разноуровневая крыша и мансардный этаж придают дому индивидуальность и современный облик. Отличный вариант для реализации в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с эркером и гаражом SD-300 – проект для комфортной жизни в [city|pp]',
        'seo_description' => 'SD-300 – солидный двухэтажный дом общей площадью 154 м². Эркер добавляет эстетики, а встроенный гараж делает дом максимально удобным для семьи. Подходит для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с четырьмя спальнями и гаражом SD-301 – готовый проект в [city|pp]',
        'seo_description' => 'Проект SD-301 – функциональный двухэтажный дом площадью 97 м². Четыре спальни обеспечат комфорт большой семьи, а гараж добавит практичности. Доступен для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом для небольшого участка с постирочной SD-299 – проект в [city|pp]',
        'seo_description' => 'SD-299 – современный дом из газобетона площадью 101 м². Компактное решение с постирочной и рациональной планировкой идеально подходит для небольшого участка в [city|pp].',
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
