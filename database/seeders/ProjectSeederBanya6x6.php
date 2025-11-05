<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanya6x6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => 'Хоффмейстер , каркасные дома, 31.15 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_429/p429_photo_1.webp',
    'slug' => 'xoffmeister-karkasnye-doma-3115-kvm',
    'start_price' => '665500',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_429/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_429/p429_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_429/p429_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_429/p429_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_429/p429_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_429/p429_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_429/p429_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 31.15,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С баней',
],

[
    'title' => 'Аспорина , каркасные дома, 33.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_430/p430_photo_1.webp',
    'slug' => 'asporina-karkasnye-doma-336-kvm',
    'start_price' => '718400',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_430/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_430/p430_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_430/p430_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_430/p430_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_430/p430_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 33.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С баней',
],

[
    'title' => 'Сальвия , каркасные дома, 45.68 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_431/p431_photo_1.webp',
    'slug' => 'salviia-karkasnye-doma-4568-kvm',
    'start_price' => '975200',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_431/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_431/p431_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_431/p431_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 2,
    'total_area' => 45.68,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3209, профилированный брус, 28.73 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_432/p432_photo_1.webp',
    'slug' => 'proekt-bn-3209-profilirovannyi-brus-2873-kvm',
    'start_price' => '1200000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_432/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_432/p432_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_432/p432_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 28.73,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С купелью',
],

[
    'title' => 'Проект БН-3198, профилированный брус, 29.08 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_433/p433_photo_1.webp',
    'slug' => 'proekt-bn-3198-profilirovannyi-brus-2908-kvm',
    'start_price' => '1700000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_433/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_433/p433_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_433/p433_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 29.08,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3201, профилированный брус, 32.06 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_434/p434_photo_1.webp',
    'slug' => 'proekt-bn-3201-profilirovannyi-brus-3206-kvm',
    'start_price' => '1800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_434/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_434/p434_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_434/p434_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_434/p434_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_434/p434_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_434/p434_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_434/p434_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 32.06,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3199, профилированный брус, 32.67 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_435/p435_photo_1.webp',
    'slug' => 'proekt-bn-3199-profilirovannyi-brus-3267-kvm',
    'start_price' => '1900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_435/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_435/p435_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_435/p435_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 32.67,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Брааль, оцилиндрованное бревно, 33 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_436/p436_photo_1.webp',
    'slug' => 'braal-ocilindrovannoe-brevno-33-kvm',
    'start_price' => '2100000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_436/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_436/p436_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_436/p436_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 33,
    'wall_material' => 'Оцилиндрованное бревно',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3205, профилированный брус, 41.13 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_437/p437_photo_1.webp',
    'slug' => 'proekt-bn-3205-profilirovannyi-brus-4113-kvm',
    'start_price' => '3496050',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_437/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_437/p437_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_437/p437_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_437/p437_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 41.13,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3206, профилированный брус, 43.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_438/p438_photo_1.webp',
    'slug' => 'proekt-bn-3206-profilirovannyi-brus-434-kvm',
    'start_price' => '2700000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_438/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_438/p438_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_438/p438_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_438/p438_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 43.4,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3204, профилированный брус, 45.19 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_439/p439_photo_1.webp',
    'slug' => 'proekt-bn-3204-profilirovannyi-brus-4519-kvm',
    'start_price' => '2800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_439/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_439/p439_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_439/p439_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_439/p439_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 45.19,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3203, профилированный брус, 47.25 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_440/p440_photo_1.webp',
    'slug' => 'proekt-bn-3203-profilirovannyi-brus-4725-kvm',
    'start_price' => '2900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_440/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_440/p440_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_440/p440_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_440/p440_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_440/p440_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_440/p440_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_440/p440_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 47.25,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3202, профилированный брус, 48.59 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_441/p441_photo_1.webp',
    'slug' => 'proekt-bn-3202-profilirovannyi-brus-4859-kvm',
    'start_price' => '3000000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_441/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_441/p441_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_441/p441_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 48.59,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х6',
    'extension' => 'С террасой',
],

        ];

        $seo_data = [
            [
                'seo_title' => 'Хоффмейстер - каркасная баня 6х6, 31.15 кв.м | Проекты бань',
                'seo_description' => 'Проект каркасной бани Хоффмейстер 6х6 метров площадью 31.15 кв.м. Одноэтажная баня с высотой потолков 2.5м. Заказать строительство бани по выгодной цене.'
            ],
            [
                'seo_title' => 'Аспорина - каркасная баня 6х6, 33.6 кв.м | Проекты бань',
                'seo_description' => 'Проект каркасной бани Аспорина 6х6 метров площадью 33.6 кв.м. Одноэтажная баня с высотой потолков 2.5м. Профессиональное строительство бань под ключ.'
            ],
            [
                'seo_title' => 'Сальвия - каркасная баня 6х6 с террасой, 45.68 кв.м | Проекты бань',
                'seo_description' => 'Проект каркасной бани Сальвия 6х6 метров с террасой, площадь 45.68 кв.м. Двухэтажная баня с высотой потолков 2.5м. Строительство бань с террасой.'
            ],
            [
                'seo_title' => 'БН-3209 - баня из профилированного бруса 6х6 с купелью, 28.73 кв.м',
                'seo_description' => 'Проект бани БН-3209 из профилированного бруса 6х6 метров с купелью, площадь 28.73 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3198 - баня из профилированного бруса 6х6, 29.08 кв.м',
                'seo_description' => 'Проект бани БН-3198 из профилированного бруса 6х6 метров с комнатой отдыха, площадь 29.08 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3201 - баня из профилированного бруса 6х6, 32.06 кв.м',
                'seo_description' => 'Проект бани БН-3201 из профилированного бруса 6х6 метров с комнатой отдыха, площадь 32.06 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3199 - баня из профилированного бруса 6х6 с террасой, 32.67 кв.м',
                'seo_description' => 'Проект бани БН-3199 из профилированного бруса 6х6 метров с террасой, площадь 32.67 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'Брааль - баня из оцилиндрованного бревна 6х6, 33 кв.м',
                'seo_description' => 'Проект бани Брааль из оцилиндрованного бревна 6х6 метров с комнатой отдыха, площадь 33 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3205 - баня из профилированного бруса 6х6 с террасой, 41.13 кв.м',
                'seo_description' => 'Проект бани БН-3205 из профилированного бруса 6х6 метров с террасой, площадь 41.13 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3206 - баня из профилированного бруса 6х6 с террасой, 43.4 кв.м',
                'seo_description' => 'Проект бани БН-3206 из профилированного бруса 6х6 метров с террасой, площадь 43.4 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3204 - баня из профилированного бруса 6х6 с террасой, 45.19 кв.м',
                'seo_description' => 'Проект бани БН-3204 из профилированного бруса 6х6 метров с террасой, площадь 45.19 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3203 - баня из профилированного бруса 6х6 с террасой, 47.25 кв.м',
                'seo_description' => 'Проект бани БН-3203 из профилированного бруса 6х6 метров с террасой, площадь 47.25 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ],
            [
                'seo_title' => 'БН-3202 - баня из профилированного бруса 6х6 с террасой, 48.59 кв.м',
                'seo_description' => 'Проект бани БН-3202 из профилированного бруса 6х6 метров с террасой, площадь 48.59 кв.м. Одноэтажная баня с высотой потолков 2.5м.'
            ]

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
