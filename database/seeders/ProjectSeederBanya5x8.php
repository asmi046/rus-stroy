<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanya5x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => 'Проект БН-3192, профилированный брус, 29.45 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_460/p460_photo_1.webp',
    'slug' => 'proekt-bn-3192-profilirovannyi-brus-2945-kvm',
    'start_price' => '2356000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_460/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_460/p460_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_460/p460_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 29.45,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3195, профилированный брус, 34.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_461/p461_photo_1.webp',
    'slug' => 'proekt-bn-3195-profilirovannyi-brus-345-kvm',
    'start_price' => '2760000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_461/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_461/p461_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_461/p461_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 34.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3194, профилированный брус, 37.8 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_462/p462_photo_1.webp',
    'slug' => 'proekt-bn-3194-profilirovannyi-brus-378-kvm',
    'start_price' => '3024000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_462/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_462/p462_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_462/p462_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 37.8,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3193, профилированный брус, 39.8 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_463/p463_photo_1.webp',
    'slug' => 'proekt-bn-3193-profilirovannyi-brus-398-kvm',
    'start_price' => '3184000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_463/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_463/p463_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_463/p463_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 39.8,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3196, профилированный брус, 38.9 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_464/p464_photo_1.webp',
    'slug' => 'proekt-bn-3196-profilirovannyi-brus-389-kvm',
    'start_price' => '3206000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_464/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_464/p464_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_464/p464_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 38.9,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х8',
    'extension' => 'С террасой',
],

        ];

        $seo_data = [
            [
                'seo_title' => 'Проект БН-3192 - баня из профилированного бруса 5х8 с террасой',
                'seo_description' => 'Проект бани БН-3192 из профилированного бруса площадью 29.45 кв.м. Размеры 5х8 метров с террасой. Одноэтажная баня с высотой потолков 2.5 м.',
            ],
            [
                'seo_title' => 'Проект БН-3195 - баня из профилированного бруса 5х8 с террасой',
                'seo_description' => 'Проект бани БН-3195 из профилированного бруса площадью 34.5 кв.м. Размеры 5х8 метров с террасой. Одноэтажная баня с высотой потолков 2.5 м.',
            ],
            [
                'seo_title' => 'Проект БН-3194 - баня из профилированного бруса 5х8 с террасой',
                'seo_description' => 'Проект бани БН-3194 из профилированного бруса площадью 37.8 кв.м. Размеры 5х8 метров с террасой. Одноэтажная баня с высотой потолков 2.5 м.',
            ],
            [
                'seo_title' => 'Проект БН-3193 - баня из профилированного бруса 5х8 с террасой',
                'seo_description' => 'Проект бани БН-3193 из профилированного бруса площадью 39.8 кв.м. Размеры 5х8 метров с террасой. Одноэтажная баня с высотой потолков 2.5 м.',
            ],
            [
                'seo_title' => 'Проект БН-3196 - баня из профилированного бруса 5х8 с террасой',
                'seo_description' => 'Проект бани БН-3196 из профилированного бруса площадью 38.9 кв.м. Размеры 5х8 метров с террасой. Одноэтажная баня с высотой потолков 2.5 м.',
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
