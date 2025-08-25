<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder8x10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажный дом с панорамными окнами SD-345',
                'img' => '/tmp_data/projects/pr_125/p125_photo_1.JPG',
                'slug' => 'odnoetaznyi-dom-s-panoramnymi-oknami-sd-345',
                'start_price' => ' 4916000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_125/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_125/p125_photo_1.JPG',
                    '/tmp_data/projects/pr_125/p125_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 802,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой дом в прованском стиле SD-344',
                'img' => '/tmp_data/projects/pr_126/p126_photo_1.JPG',
                'slug' => 'nebolsoi-dom-v-provanskom-stile-sd-344',
                'start_price' => ' 5100350 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_126/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_126/p126_photo_1.JPG',
                    '/tmp_data/projects/pr_126/p126_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 832,
                'wall_material' => 'Клеёный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный коттедж с 3-мя спальнями для узкого участка SD-148',
                'img' => '/tmp_data/projects/pr_127/p127_photo_1.JPG',
                'slug' => 'dvuxetaznyi-kottedz-s-3-mia-spalniami-dlia-uzkogo-ucastka-sd-148',
                'start_price' => ' 8250000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_127/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_127/p127_photo_1.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_2.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_3.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_4.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_5.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_6.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_7.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_8.JPG',
                    '/tmp_data/projects/pr_127/p127_photo_9.JPG',
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
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Дом с тремя спальнями SD-342',
                'img' => '/tmp_data/projects/pr_128/p128_photo_1.JPG',
                'slug' => 'dom-s-tremia-spalniami-sd-342',
                'start_price' => ' 4916000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_128/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_128/p128_photo_1.JPG',
                    '/tmp_data/projects/pr_128/p128_photo_2.JPG',
                    '/tmp_data/projects/pr_128/p128_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 802,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Великолепный двухэтажный коттедж SD-175',
                'img' => '/tmp_data/projects/pr_129/p129_photo_1.JPG',
                'slug' => 'velikolepnyi-dvuxetaznyi-kottedz-sd-175',
                'start_price' => ' 10050000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_129/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_129/p129_photo_1.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_2.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_3.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_4.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_5.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_6.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_7.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_8.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_9.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_10.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_11.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_12.JPG',
                    '/tmp_data/projects/pr_129/p129_photo_13.JPG',
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
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Дом с камином и двумя спальнями SD-002',
                'img' => '/tmp_data/projects/pr_130/p130_photo_1.JPG',
                'slug' => 'dom-s-kaminom-i-dvumia-spalniami-sd-002',
                'start_price' => ' 8820000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_130/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_130/p130_photo_1.JPG',
                    '/tmp_data/projects/pr_130/p130_photo_2.JPG',
                    '/tmp_data/projects/pr_130/p130_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 982,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Дом с балконом для узкого участка SD-196',
                'img' => '/tmp_data/projects/pr_131/p131_photo_1.JPG',
                'slug' => 'dom-s-balkonom-dlia-uzkogo-ucastka-sd-196',
                'start_price' => ' 8925000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_131/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_131/p131_photo_1.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_2.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_3.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_4.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_5.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_6.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_7.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_8.JPG',
                    '/tmp_data/projects/pr_131/p131_photo_9.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1192,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с балконом и террасой SD-348',
                'img' => '/tmp_data/projects/pr_132/p132_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-balkonom-i-terrasoi-sd-348',
                'start_price' => ' 9832000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_132/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_132/p132_photo_1.JPG',
                    '/tmp_data/projects/pr_132/p132_photo_2.JPG',
                    '/tmp_data/projects/pr_132/p132_photo_3.JPG',
                    '/tmp_data/projects/pr_132/p132_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1602,
                'wall_material' => 'Кирпич',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Современный компактный дом с мансардой SD-058',
                'img' => '/tmp_data/projects/pr_133/p133_photo_1.JPG',
                'slug' => 'sovremennyi-kompaktnyi-dom-s-mansardoi-sd-058',
                'start_price' => ' 8250000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_133/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_133/p133_photo_1.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_2.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_3.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_4.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_5.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_6.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_7.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_8.JPG',
                    '/tmp_data/projects/pr_133/p133_photo_9.JPG',
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
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с террасой и пятью спальнями SD-343',
                'img' => '/tmp_data/projects/pr_134/p134_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-terrasoi-i-piatiu-spalniami-sd-343',
                'start_price' => ' 9832000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_134/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_134/p134_photo_1.JPG',
                    '/tmp_data/projects/pr_134/p134_photo_2.JPG',
                    '/tmp_data/projects/pr_134/p134_photo_3.JPG',
                    '/tmp_data/projects/pr_134/p134_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1602,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом в стиле прованс SD-341',
                'img' => '/tmp_data/projects/pr_135/p135_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-v-stile-provans-sd-341',
                'start_price' => ' 7066750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_135/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_135/p135_photo_1.JPG',
                    '/tmp_data/projects/pr_135/p135_photo_2.JPG',
                    '/tmp_data/projects/pr_135/p135_photo_3.JPG',
                    '/tmp_data/projects/pr_135/p135_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1152,
                'wall_material' => 'Профилированный брус',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '8x10',
                'extension' => null,
            ],
        ];

        $seo_data = [
    [
        'seo_title' => 'Одноэтажный дом с панорамными окнами SD-345 – строительство в [city|pp]',
        'seo_description' => 'Современный одноэтажный дом площадью 802 м² с панорамными окнами. Построен из газобетона, обеспечивает свет и уют. Доступен для реализации в [city|pp].',
    ],
    [
        'seo_title' => 'Небольшой дом в прованском стиле SD-344 – проект в [city|pp]',
        'seo_description' => 'Компактный одноэтажный дом площадью 832 м² из клеёного бруса. Лаконичный дизайн в стиле прованс и экологичные материалы. Оптимальное решение для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный коттедж для узкого участка SD-148 – строительство в [city|pp]',
        'seo_description' => 'Коттедж из газобетона площадью 1102 м² с двумя этажами и тремя спальнями. Рациональная планировка для узкого участка. Доступен к возведению в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с тремя спальнями SD-342 – проект в [city|pp]',
        'seo_description' => 'Уютный одноэтажный дом площадью 802 м² из газобетона. Практичное решение для семьи с тремя спальнями, подходит для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Великолепный двухэтажный коттедж SD-175 – строительство в [city|pp]',
        'seo_description' => 'Просторный дом площадью 1342 м² с двумя этажами. Газобетонные стены, современный дизайн и функциональная планировка. Доступен для реализации в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с камином и двумя спальнями SD-002 – проект в [city|pp]',
        'seo_description' => 'Двухэтажный дом из оцилиндрованного бревна площадью 982 м². Тёплая атмосфера с камином и комфорт для семьи. Отличный выбор для строительства в [city|pp].',
    ],
    [
        'seo_title' => 'Дом с балконом для узкого участка SD-196 – строительство в [city|pp]',
        'seo_description' => 'Двухэтажный дом площадью 1192 м² с удобным балконом. Построен из газобетона, идеально подходит для узкого участка. Реализуем в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с балконом и террасой SD-348 – проект в [city|pp]',
        'seo_description' => 'Дом из кирпича площадью 1602 м² с балконом и просторной террасой. Два этажа для комфортного проживания семьи. Доступен к строительству в [city|pp].',
    ],
    [
        'seo_title' => 'Современный компактный дом с мансардой SD-058 – строительство в [city|pp]',
        'seo_description' => 'Двухэтажный дом площадью 1102 м² с мансардой. Построен из газобетона, сочетает компактность и стиль. Отличное решение для реализации в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом с террасой и пятью спальнями SD-343 – проект в [city|pp]',
        'seo_description' => 'Коттедж площадью 1602 м² из профилированного бруса. Два этажа, пять спален и просторная терраса – готов к строительству в [city|pp].',
    ],
    [
        'seo_title' => 'Двухэтажный дом в стиле прованс SD-341 – строительство в [city|pp]',
        'seo_description' => 'Элегантный дом площадью 1152 м², выполненный из профилированного бруса. Два этажа, стиль прованс и уютная атмосфера. Доступен для строительства в [city|pp].',
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
