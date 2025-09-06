<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => '"Проект БН-3267", Профилированный брус, 5.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_253/p253_photo_1.webp',
    'slug' => 'proekt-bn-3267-profilirovannyi-brus-565-kvm-v-nefteiuganske',
    'start_price' => '69732',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_253/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_253/p253_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_253/p253_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_253/p253_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 5.65,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3237", Профилированный брус, 47.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_254/p254_photo_1.webp',
    'slug' => 'proekt-bn-3237-profilirovannyi-brus-475-kvm-v-nefteiuganske',
    'start_price' => '120000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_254/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_254/p254_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_254/p254_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_254/p254_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_254/p254_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 47.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х9',
    'extension' => null,
],

[
    'title' => '"Фини ", Профилированный брус, 50.96 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_255/p255_photo_1.webp',
    'slug' => 'fini-profilirovannyi-brus-5096-kvm-v-nefteiuganske',
    'start_price' => '628948',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_255/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_255/p255_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_255/p255_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_255/p255_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_255/p255_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_255/p255_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_255/p255_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 50.96,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3251", Профилированный брус, 78.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_256/p256_photo_1.webp',
    'slug' => 'proekt-bn-3251-profilirovannyi-brus-784-kvm-v-nefteiuganske',
    'start_price' => '150000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_256/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_256/p256_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_256/p256_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_256/p256_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_256/p256_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_256/p256_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_256/p256_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 78.4,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х8',
    'extension' => null,
],

[
    'title' => '"Проект БН-3268", Профилированный брус, 10.18 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_257/p257_photo_1.webp',
    'slug' => 'proekt-bn-3268-profilirovannyi-brus-1018-kvm-v-nefteiuganske',
    'start_price' => '150000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_257/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_257/p257_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_257/p257_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.18,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3280", Профилированный брус, 12.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_258/p258_photo_1.webp',
    'slug' => 'proekt-bn-3280-profilirovannyi-brus-1275-kvm-v-nefteiuganske',
    'start_price' => '157361',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_258/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_258/p258_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_258/p258_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 12.75,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х5',
    'extension' => null,
],

[
    'title' => '"Джеральдина ", Профилированный брус, 19.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_259/p259_photo_1.webp',
    'slug' => 'dzeraldina-profilirovannyi-brus-197-kvm-v-nefteiuganske',
    'start_price' => '243137',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_259/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_259/p259_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_259/p259_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_259/p259_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_259/p259_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_259/p259_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_259/p259_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 19.7,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Софросина", Профилированный брус, 58.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_260/p260_photo_1.webp',
    'slug' => 'sofrosina-profilirovannyi-brus-585-kvm-v-nefteiuganske',
    'start_price' => '722007',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_260/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_260/p260_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_260/p260_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_260/p260_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 58.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х5',
    'extension' => null,
],

        ];

        $seo_data = [
            [
            'seo_title' => 'Проект БН-3267 — баня из профилированного бруса 5.65 м² в [city|pp]',
            'seo_description' => 'Компактная баня 5.65 м² из профилированного бруса. Отличный вариант для дачи и отдыха в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3237 — баня из профилированного бруса 47.5 м² в [city|pp]',
            'seo_description' => 'Просторная баня 47.5 м² из профилированного бруса. Идеально для семейного отдыха в [city|pp].',
            ],
            [
            'seo_title' => 'Фини — баня из профилированного бруса 50.96 м² в [city|pp]',
            'seo_description' => 'Баня Фини площадью 50.96 м² из профилированного бруса. Комфорт и качество для вашего участка в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3251 — баня из профилированного бруса 78.4 м² в [city|pp]',
            'seo_description' => 'Большая баня 78.4 м² из профилированного бруса. Простор для отдыха и гостей в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3268 — баня из профилированного бруса 10.18 м² в [city|pp]',
            'seo_description' => 'Небольшая баня 10.18 м² из профилированного бруса. Практичное решение для дачи в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3280 — баня из профилированного бруса 12.75 м² в [city|pp]',
            'seo_description' => 'Баня 12.75 м² из профилированного бруса. Уют и комфорт для вашего участка в [city|pp].',
            ],
            [
            'seo_title' => 'Джеральдина — баня из профилированного бруса 19.7 м² в [city|pp]',
            'seo_description' => 'Баня Джеральдина площадью 19.7 м² из профилированного бруса. Отличный выбор для отдыха в [city|pp].',
            ],
            [
            'seo_title' => 'Софросина — баня из профилированного бруса 58.5 м² в [city|pp]',
            'seo_description' => 'Баня Софросина 58.5 м² из профилированного бруса. Простор и уют для всей семьи в [city|pp].',
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
