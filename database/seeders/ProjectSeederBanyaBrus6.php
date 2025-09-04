<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => '"Проект БН-3385", каркасные дома, 10.1 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_331/p331_photo_1.webp',
    'slug' => 'proekt-bn-3385-karkasnye-doma-101-kvm-v-nefteiuganske',
    'start_price' => '130000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_331/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_331/p331_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_331/p331_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_331/p331_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.1,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3402", каркасные дома, 15.3 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_332/p332_photo_1.webp',
    'slug' => 'proekt-bn-3402-karkasnye-doma-153-kvm-v-nefteiuganske',
    'start_price' => '177000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_332/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_332/p332_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_332/p332_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.3,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3408", каркасные дома, 15.3 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_334/p334_photo_1.webp',
    'slug' => 'proekt-bn-3408-karkasnye-doma-153-kvm-v-nefteiuganske',
    'start_price' => '165000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_334/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_334/p334_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_334/p334_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.3,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3413", каркасные дома, 18.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_335/p335_photo_1.webp',
    'slug' => 'proekt-bn-3413-karkasnye-doma-187-kvm-v-nefteiuganske',
    'start_price' => '230795',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_335/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_335/p335_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_335/p335_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 18.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3401", каркасные дома, 20.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_336/p336_photo_1.webp',
    'slug' => 'proekt-bn-3401-karkasnye-doma-204-kvm-v-nefteiuganske',
    'start_price' => '240000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_336/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_336/p336_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_336/p336_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 20.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3376", каркасные дома, 7.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_337/p337_photo_1.webp',
    'slug' => 'proekt-bn-3376-karkasnye-doma-765-kvm-v-nefteiuganske',
    'start_price' => '91000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_337/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_337/p337_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_337/p337_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 7.65,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3395", каркасные дома, 12.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_338/p338_photo_1.webp',
    'slug' => 'proekt-bn-3395-karkasnye-doma-1275-kvm-v-nefteiuganske',
    'start_price' => '141000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_338/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_338/p338_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_338/p338_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 12.75,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3421", каркасные дома, 17 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_339/p339_photo_1.webp',
    'slug' => 'proekt-bn-3421-karkasnye-doma-17-kvm-v-nefteiuganske',
    'start_price' => '209814',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_339/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_339/p339_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_339/p339_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3393", каркасные дома, 12.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_340/p340_photo_1.webp',
    'slug' => 'proekt-bn-3393-karkasnye-doma-124-kvm-v-nefteiuganske',
    'start_price' => '142000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_340/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_340/p340_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_340/p340_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 12.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3399", каркасные дома, 15.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_341/p341_photo_1.webp',
    'slug' => 'proekt-bn-3399-karkasnye-doma-1565-kvm-v-nefteiuganske',
    'start_price' => '179000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_341/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_341/p341_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_341/p341_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.65,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3382", каркасные дома, 10.33 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_342/p342_photo_1.webp',
    'slug' => 'proekt-bn-3382-karkasnye-doma-1033-kvm-v-nefteiuganske',
    'start_price' => '127493',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_342/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_342/p342_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_342/p342_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_342/p342_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.33,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3411", каркасные дома, 8.96 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_343/p343_photo_1.webp',
    'slug' => 'proekt-bn-3411-karkasnye-doma-896-kvm-v-nefteiuganske',
    'start_price' => '100000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_343/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_343/p343_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_343/p343_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 8.96,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3379", каркасные дома, 10.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_344/p344_photo_1.webp',
    'slug' => 'proekt-bn-3379-karkasnye-doma-102-kvm-v-nefteiuganske',
    'start_price' => '111000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_344/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_344/p344_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_344/p344_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.2,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3384", каркасные дома, 10.1 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_345/p345_photo_1.webp',
    'slug' => 'proekt-bn-3384-karkasnye-doma-101-kvm-v-nefteiuganske',
    'start_price' => '124654',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_345/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_345/p345_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_345/p345_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_345/p345_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.1,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3389", каркасные дома, 11.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_346/p346_photo_1.webp',
    'slug' => 'proekt-bn-3389-karkasnye-doma-114-kvm-v-nefteiuganske',
    'start_price' => '133000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_346/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_346/p346_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_346/p346_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 11.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х5',
    'extension' => null,
],


[
    'title' => '"Проект БН-3414", каркасные дома, 7.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_347/p347_photo_1.webp',
    'slug' => 'proekt-bn-3414-karkasnye-doma-765-kvm-v-nefteiuganske',
    'start_price' => '91000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_347/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_347/p347_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_347/p347_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 7.65,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3425", каркасные дома, 6.66 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_348/p348_photo_1.webp',
    'slug' => 'proekt-bn-3425-karkasnye-doma-666-kvm-v-nefteiuganske',
    'start_price' => '82000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_348/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_348/p348_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_348/p348_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 6.66,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3422", каркасные дома, 18.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_349/p349_photo_1.webp',
    'slug' => 'proekt-bn-3422-karkasnye-doma-187-kvm-v-nefteiuganske',
    'start_price' => '202000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_349/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_349/p349_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_349/p349_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 18.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3392", каркасные дома, 5.55 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_350/p350_photo_1.webp',
    'slug' => 'proekt-bn-3392-karkasnye-doma-555-kvm-v-nefteiuganske',
    'start_price' => '65000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_350/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_350/p350_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_350/p350_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 5.55,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3404", каркасные дома, 13.51 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_351/p351_photo_1.webp',
    'slug' => 'proekt-bn-3404-karkasnye-doma-1351-kvm-v-nefteiuganske',
    'start_price' => '166740',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_351/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_351/p351_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_351/p351_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.51,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3394", каркасные дома, 11.76 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_352/p352_photo_1.webp',
    'slug' => 'proekt-bn-3394-karkasnye-doma-1176-kvm-v-nefteiuganske',
    'start_price' => '135000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_352/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_352/p352_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_352/p352_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 11.76,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3377", каркасные дома, 7.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_353/p353_photo_1.webp',
    'slug' => 'proekt-bn-3377-karkasnye-doma-765-kvm-v-nefteiuganske',
    'start_price' => '92000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_353/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_353/p353_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_353/p353_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 7.65,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3423", каркасные дома, 37.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_354/p354_photo_1.webp',
    'slug' => 'proekt-bn-3423-karkasnye-doma-374-kvm-v-nefteiuganske',
    'start_price' => '521000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_354/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_354/p354_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_354/p354_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_354/p354_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 37.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],
        ];

        $seo_data = [
            [
            'seo_title' => 'Проект БН-3385 - каркасная баня 10.1 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 10.1 кв.м. по проекту БН-3385. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3402 - каркасная баня 15.3 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 15.3 кв.м. по проекту БН-3402. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3408 - каркасная баня 15.3 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 15.3 кв.м. по проекту БН-3408. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3413 - каркасная баня 18.7 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 18.7 кв.м. по проекту БН-3413. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3401 - каркасная баня 20.4 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 20.4 кв.м. по проекту БН-3401. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3376 - каркасная баня 7.65 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 7.65 кв.м. по проекту БН-3376. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3395 - каркасная баня 12.75 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 12.75 кв.м. по проекту БН-3395. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3421 - каркасная баня 17 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 17 кв.м. по проекту БН-3421. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3393 - каркасная баня 12.4 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 12.4 кв.м. по проекту БН-3393. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3399 - каркасная баня 15.65 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 15.65 кв.м. по проекту БН-3399. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3382 - каркасная баня 10.33 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 10.33 кв.м. по проекту БН-3382. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3411 - каркасная баня 8.96 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 8.96 кв.м. по проекту БН-3411. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3379 - каркасная баня 10.2 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 10.2 кв.м. по проекту БН-3379. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3384 - каркасная баня 10.1 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 10.1 кв.м. по проекту БН-3384. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3389 - каркасная баня 11.4 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 11.4 кв.м. по проекту БН-3389. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3414 - каркасная баня 7.65 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 7.65 кв.м. по проекту БН-3414. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3425 - каркасная баня 6.66 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 6.66 кв.м. по проекту БН-3425. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3422 - каркасная баня 18.7 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 18.7 кв.м. по проекту БН-3422. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3392 - каркасная баня 5.55 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 5.55 кв.м. по проекту БН-3392. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3404 - каркасная баня 13.51 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 13.51 кв.м. по проекту БН-3404. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3394 - каркасная баня 11.76 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 11.76 кв.м. по проекту БН-3394. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3377 - каркасная баня 7.65 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 7.65 кв.м. по проекту БН-3377. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3423 - каркасная баня 37.4 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 37.4 кв.м. по проекту БН-3423. Цена, фото, планировка, характеристики. Строительство в [city|pp].',
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
