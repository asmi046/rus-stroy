<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder9x13 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Симпатичный дом в два этажа площадью 150 м2 SD-290',
                'img' => '/tmp_data/projects/pr_204/p204_photo_1.JPG',
                'slug' => 'simpaticnyi-dom-v-dva-etaza-ploshhadiu-150-m2-sd-290',
                'start_price' => ' 9307500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_204/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_204/p204_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_204/p204_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 146,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Восхитительный двухэтажный дом на 3 спальни SD-173',
                'img' => '/tmp_data/projects/pr_205/p205_photo_1.JPG',
                'slug' => 'vosxititelnyi-dvuxetaznyi-dom-na-3-spalni-sd-173',
                'start_price' => ' 8925000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_205/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_205/p205_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_205/p205_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_205/p205_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_205/p205_photo_4.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_205/p205_photo_5.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 140,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой одноэтажный дом с 2-я спальнями SD-008',
                'img' => '/tmp_data/projects/pr_206/p206_photo_1.JPG',
                'slug' => 'nebolsoi-odnoetaznyi-dom-s-2-ia-spalniami-sd-008',
                'start_price' => ' 5036250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_206/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_206/p206_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_206/p206_photo_2.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_206/p206_photo_3.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 79,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Загородный коттедж с мансардой и балконом SD-023',
                'img' => '/tmp_data/projects/pr_207/p207_photo_1.JPG',
                'slug' => 'zagorodnyi-kottedz-s-mansardoi-i-balkonom-sd-023',
                'start_price' => ' 7140000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_207/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_9.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_10.JPG'],
                    ['img' => '/tmp_data/projects/pr_207/p207_photo_11.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_207/p207_photo_12.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 112,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой мансардный коттедж для узкого участка SD-237',
                'img' => '/tmp_data/projects/pr_208/p208_photo_1.JPG',
                'slug' => 'nebolsoi-mansardnyi-kottedz-dlia-uzkogo-ucastka-sd-237',
                'start_price' => ' 9945000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_208/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_9.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_10.JPG'],
                    ['img' => '/tmp_data/projects/pr_208/p208_photo_11.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_208/p208_photo_12.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 156,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой  дом с мансардой и гаражом SD-061',
                'img' => '/tmp_data/projects/pr_209/p209_photo_1.JPG',
                'slug' => 'nebolsoi-dom-s-mansardoi-i-garazom-sd-061',
                'start_price' => ' 9817500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_209/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_9.JPG'],
                    ['img' => '/tmp_data/projects/pr_209/p209_photo_10.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_209/p209_photo_11.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 154,
                'wall_material' => 'Кирпич',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],

            [
                'title' => 'Современный стильный коттедж с гаражом SD-123',
                'img' => '/tmp_data/projects/pr_210/p210_photo_1.JPG',
                'slug' => 'sovremennyi-stilnyi-kottedz-s-garazom-sd-123',
                'start_price' => ' 10773750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_210/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_9.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_10.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_11.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_12.JPG'],
                    ['img' => '/tmp_data/projects/pr_210/p210_photo_13.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_210/p210_photo_14.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 169,
                'wall_material' => 'Кирпич',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9x13',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Симпатичный двухэтажный дом SD-290 площадью 150 м² – строительство в [city|pp]',
                'seo_description' => 'Современный двухэтажный дом из газобетона площадью 146 м². Просторное и практичное решение для комфортного проживания в [city|pp].',
            ],
            [
                'seo_title' => 'Восхитительный дом на 3 спальни SD-173 – проект в [city|pp]',
                'seo_description' => 'Двухэтажный дом из газобетона площадью 140 м² с тремя спальнями. Идеальное сочетание уюта и функциональности для семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Небольшой одноэтажный дом SD-008 с двумя спальнями – строительство в [city|pp]',
                'seo_description' => 'Компактный дом из газобетона площадью 79 м². Практичное решение для небольшой семьи или дачи в [city|pp].',
            ],
            [
                'seo_title' => 'Загородный коттедж SD-023 с мансардой и балконом – проект в [city|pp]',
                'seo_description' => 'Уютный загородный коттедж из газобетона площадью 112 м². Стильный проект с мансардой и балконом для комфортной жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Мансардный коттедж SD-237 для узкого участка – строительство в [city|pp]',
                'seo_description' => 'Дом из газобетона площадью 156 м². Практичный проект с мансардой, созданный специально для узких участков в [city|pp].',
            ],
            [
                'seo_title' => 'Дом с мансардой и гаражом SD-061 – проект в [city|pp]',
                'seo_description' => 'Функциональный дом из газобетона площадью 154 м² с гаражом. Удобное и современное решение для семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Современный коттедж SD-123 с гаражом – строительство в [city|pp]',
                'seo_description' => 'Стильный коттедж из газобетона площадью 169 м² с гаражом. Комфорт и современная архитектура для жизни в [city|pp].',
            ],
        ];

        $i = 0;
        foreach ($data as $item) {

            $img_name = basename($item['img']);
            Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($item['img'])), 'public');
            $item['img'] = "projects/".$img_name;

            foreach($item['gallery'] as $key => $image) {
                $img_name = basename($image['img']);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image['img'])), 'public');
                $item['gallery'][$key]['img'] = "projects/".$img_name;
            }

            $item['gallery'] = json_encode($item['gallery']);

            foreach($item['layout'] as $key => $image) {
                $img_name = basename($image['img']);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image['img'])), 'public');
                $item['layout'][$key]['img'] = "projects/".$img_name;
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
