<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder10x13 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажный коттедж SD-291',
                'img' => '/tmp_data/projects/pr_211/p211_photo_1.JPG',
                'slug' => 'odnoetaznyi-kottedz-sd-291',
                'start_price' => ' 6502500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_211/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_211/p211_photo_6.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_211/p211_photo_7.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 102,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Одноэтажный домик с маленьким чердаком SD-062',
                'img' => '/tmp_data/projects/pr_212/p212_photo_1.JPG',
                'slug' => 'odnoetaznyi-domik-s-malenkim-cerdakom-sd-062',
                'start_price' => ' 5482500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_212/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_212/p212_photo_6.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_212/p212_photo_7.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 86,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом из бревна с парной SD-258',
                'img' => '/tmp_data/projects/pr_213/p213_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-iz-brevna-s-parnoi-sd-258',
                'start_price' => ' 12622500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_213/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_213/p213_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_213/p213_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 165,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Коттедж с оригинальной мансардой и кирпичным фасадом SD-082',
                'img' => '/tmp_data/projects/pr_214/p214_photo_1.JPG',
                'slug' => 'kottedz-s-originalnoi-mansardoi-i-kirpicnym-fasadom-sd-082',
                'start_price' => ' 9636250 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_214/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_8.JPG'],
                    ['img' => '/tmp_data/projects/pr_214/p214_photo_9.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_214/p214_photo_10.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 151,
                'wall_material' => 'Кирпич',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Уютный коттедж в традиционном стиле с двускатной крышей SD-213',
                'img' => '/tmp_data/projects/pr_215/p215_photo_1.JPG',
                'slug' => 'uiutnyi-kottedz-v-tradicionnom-stile-s-dvuskatnoi-krysei-sd-213',
                'start_price' => ' 11602500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_215/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_215/p215_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_215/p215_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 182,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Строгий двухэтажный дом с эркерами и балконами SD-034',
                'img' => '/tmp_data/projects/pr_216/p216_photo_1.JPG',
                'slug' => 'strogii-dvuxetaznyi-dom-s-erkerami-i-balkonami-sd-034',
                'start_price' => ' 13068750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_216/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_216/p216_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_216/p216_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_216/p216_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_216/p216_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 205,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],

            [
                'title' => 'Мансардный дом с дополнительной спальней на первом этаже SD-009',
                'img' => '/tmp_data/projects/pr_217/p217_photo_1.JPG',
                'slug' => 'mansardnyi-dom-s-dopolnitelnoi-spalnei-na-pervom-etaze-sd-009',
                'start_price' => ' 12112500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_217/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_217/p217_photo_7.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_217/p217_photo_8.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 190,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x13',
                'extension' => null,
            ],
        ];


        $seo_data = [
            [
                'seo_title' => 'Одноэтажный коттедж SD-291 из газобетона 1022 м² в [city|pp]',
                'seo_description' => 'Просторный одноэтажный коттедж площадью 102 м² из газобетона. Современное решение для комфортной жизни семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Домик SD-062 — одноэтажный проект с чердаком из газобетона в [city|pp]',
                'seo_description' => 'Уютный одноэтажный домик 86 м² с небольшим чердаком. Практичный проект из газобетона для проживания и отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом SD-258 из бревна с парной в [city|pp]',
                'seo_description' => 'Надежный дом из оцилиндрованного бревна площадью 165 м² с парной. Отличный выбор для ценителей натуральных материалов в [city|pp].',
            ],
            [
                'seo_title' => 'Коттедж SD-082 с мансардой и кирпичным фасадом в [city|pp]',
                'seo_description' => 'Стильный двухэтажный коттедж 151 м² с оригинальной мансардой и кирпичным фасадом. Солидное решение для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Уютный коттедж SD-213 в традиционном стиле из газобетона в [city|pp]',
                'seo_description' => 'Дом 182 м² с двускатной крышей и просторной планировкой. Газобетонный коттедж в классическом стиле для комфортного проживания в [city|pp].',
            ],
            [
                'seo_title' => 'Двухэтажный дом SD-034 с эркерами и балконами в [city|pp]',
                'seo_description' => 'Элегантный дом из газобетона площадью 205 м². Эркеры и балконы придают фасаду выразительность. Современный проект для жизни в [city|pp].',
            ],
            [
                'seo_title' => 'Мансардный дом SD-009 с дополнительной спальней в [city|pp]',
                'seo_description' => 'Просторный дом 190 м² из газобетона с мансардой и спальней на первом этаже. Удобный и практичный вариант для семьи в [city|pp].',
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
