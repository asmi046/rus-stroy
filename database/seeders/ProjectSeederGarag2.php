<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederGarag2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => 'Проект гаража ГР-2977, газоблок, 51.9 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_406/p406_photo_1.webp',
    'slug' => 'proekt-gr-2977-gazoblok-519-kvm-v-sankt-peterburge',
    'start_price' => '285000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_406/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_406/p406_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_406/p406_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 51.9,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x12',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3018, газоблок, 59.63 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_407/p407_photo_1.webp',
    'slug' => 'proekt-gr-3018-gazoblok-5963-kvm-v-sankt-peterburge',
    'start_price' => '320000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_407/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_407/p407_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_407/p407_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 59.63,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x9',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3051, каркасные дома, 27.95 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_408/p408_photo_1.webp',
    'slug' => 'proekt-gr-3051-karkasnye-doma-2795-kvm-v-sankt-peterburge',
    'start_price' => '1677000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_408/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_408/p408_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_408/p408_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 27.95,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x6',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-2968, кирпич, 64 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_409/p409_photo_1.webp',
    'slug' => 'proekt-gr-2968-kirpic-64-kvm-v-sankt-peterburge',
    'start_price' => '3840000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_409/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_409/p409_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_409/p409_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 64,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x10',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3056, каркасные дома, 56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_410/p410_photo_1.webp',
    'slug' => 'proekt-gr-3056-karkasnye-doma-56-kvm-v-sankt-peterburge',
    'start_price' => '3360000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_410/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_410/p410_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_410/p410_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 56,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8x8',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3102, газоблок, 25.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_411/p411_photo_1.webp',
    'slug' => 'proekt-gr-3102-gazoblok-252-kvm-v-sankt-peterburge',
    'start_price' => '1512000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_411/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_411/p411_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_411/p411_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 25.2,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x6',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3109, sip-панели, 28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_412/p412_photo_1.webp',
    'slug' => 'proekt-gr-3109-sip-paneli-28-kvm-v-sankt-peterburge',
    'start_price' => '1450000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_412/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_412/p412_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_412/p412_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_412/p412_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 28,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x7',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-2969, каркасные дома, 36.63 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_413/p413_photo_1.webp',
    'slug' => 'proekt-gr-2969-karkasnye-doma-3663-kvm-v-sankt-peterburge',
    'start_price' => '1850000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_413/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_413/p413_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_8.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_9.webp'],
        ['img' => '/tmp_data/projects/pr_413/p413_photo_10.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 36.63,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x10',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3094, газоблок, 74.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_414/p414_photo_1.webp',
    'slug' => 'proekt-gr-3094-gazoblok-744-kvm-v-sankt-peterburge',
    'start_price' => '4164000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_414/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_414/p414_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_414/p414_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 74.4,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x17',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3031, sip-панели, 66.24 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_415/p415_photo_1.webp',
    'slug' => 'proekt-gr-3031-sip-paneli-6624-kvm-v-sankt-peterburge',
    'start_price' => '3550000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_415/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_415/p415_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_415/p415_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_415/p415_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 66.24,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x10',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-2981, газоблок, 78.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_416/p416_photo_1.webp',
    'slug' => 'proekt-gr-2981-gazoblok-786-kvm-v-sankt-peterburge',
    'start_price' => '4230000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_416/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_416/p416_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 78.6,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x12',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-2996, каркасные дома, 27.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_417/p417_photo_1.webp',
    'slug' => 'proekt-gr-2996-karkasnye-doma-277-kvm-v-sankt-peterburge',
    'start_price' => '1435000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_417/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_417/p417_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 27.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x7',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-2994, sip-панели, 27.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_418/p418_photo_1.webp',
    'slug' => 'proekt-gr-2994-sip-paneli-277-kvm-v-sankt-peterburge',
    'start_price' => '1435000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_418/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_418/p418_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 27.7,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x7',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3041, кирпич, 89 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_419/p419_photo_1.webp',
    'slug' => 'proekt-gr-3041-kirpic-89-kvm-v-sankt-peterburge',
    'start_price' => '5340000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_419/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_419/p419_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_419/p419_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_419/p419_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 89,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x12',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3110, газоблок, 23.76 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_420/p420_photo_1.webp',
    'slug' => 'proekt-gr-3110-gazoblok-2376-kvm-v-sankt-peterburge',
    'start_price' => '1425600',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_420/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_420/p420_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_420/p420_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 23.76,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x7',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3011, каркасные дома, 68.55 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_421/p421_photo_1.webp',
    'slug' => 'proekt-gr-3011-karkasnye-doma-6855-kvm-v-sankt-peterburge',
    'start_price' => '3760000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_421/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_421/p421_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_8.webp'],
        ['img' => '/tmp_data/projects/pr_421/p421_photo_9.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 68.55,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x9',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3070, каркасные дома, 87.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_422/p422_photo_1.webp',
    'slug' => 'proekt-gr-3070-karkasnye-doma-876-kvm-v-sankt-peterburge',
    'start_price' => '4970000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_422/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_422/p422_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_422/p422_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_422/p422_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_422/p422_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_422/p422_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_422/p422_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 87.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8x10',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3108, каркасные дома, 28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_423/p423_photo_1.webp',
    'slug' => 'proekt-gr-3108-karkasnye-doma-28-kvm-v-sankt-peterburge',
    'start_price' => '1600000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_423/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_423/p423_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_423/p423_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_423/p423_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 28,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x7',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3113, каркасные дома, 30.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_424/p424_photo_1.webp',
    'slug' => 'proekt-gr-3113-karkasnye-doma-306-kvm-v-sankt-peterburge',
    'start_price' => '1560000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_424/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_424/p424_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_424/p424_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 30.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x7',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3042, газоблок, 56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_425/p425_photo_1.webp',
    'slug' => 'proekt-gr-3042-gazoblok-56-kvm-v-sankt-peterburge',
    'start_price' => '3360000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_425/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_425/p425_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_425/p425_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_425/p425_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_425/p425_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_425/p425_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_425/p425_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 56,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x12',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-2989, газоблок, 46.51 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_426/p426_photo_1.webp',
    'slug' => 'proekt-gr-2989-gazoblok-4651-kvm-v-sankt-peterburge',
    'start_price' => '2790600',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_426/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_426/p426_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_426/p426_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 46.51,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x7',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-2973, кирпич, 24 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_427/p427_photo_1.webp',
    'slug' => 'proekt-gr-2973-kirpic-24-kvm-v-sankt-peterburge',
    'start_price' => '1370000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_427/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_427/p427_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_427/p427_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 24,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3x7',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3107, каркасные дома, 23.56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_428/p428_photo_1.webp',
    'slug' => 'proekt-gr-3107-karkasnye-doma-2356-kvm-v-sankt-peterburge',
    'start_price' => '1320000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_428/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_428/p428_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_428/p428_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_428/p428_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 23.56,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3x6',
    'extension' => null,
],
        ];

        $seo_data = [
            [
                'seo_title' => 'Проект гаража ГР-2977, газоблок, 51.9 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2977, газоблок, 51.9 кв.м. в [city|pp] площадью 51.9 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3018, газоблок, 59.63 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3018, газоблок, 59.63 кв.м. в [city|pp] площадью 59.63 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3051, каркасные дома, 27.95 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3051, каркасные дома, 27.95 кв.м. в [city|pp] площадью 27.95 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2968, кирпич, 64 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2968, кирпич, 64 кв.м. в [city|pp] площадью 64 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3056, каркасные дома, 56 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3056, каркасные дома, 56 кв.м. в [city|pp] площадью 56 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3102, газоблок, 25.2 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3102, газоблок, 25.2 кв.м. в [city|pp] площадью 25.2 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3109, sip-панели, 28 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3109, sip-панели, 28 кв.м. в [city|pp] площадью 28 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2969, каркасные дома, 36.63 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2969, каркасные дома, 36.63 кв.м. в [city|pp] площадью 36.63 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3094, газоблок, 74.4 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3094, газоблок, 74.4 кв.м. в [city|pp] площадью 74.4 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3031, sip-панели, 66.24 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3031, sip-панели, 66.24 кв.м. в [city|pp] площадью 66.24 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2981, газоблок, 78.6 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2981, газоблок, 78.6 кв.м. в [city|pp] площадью 78.6 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2996, каркасные дома, 27.7 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2996, каркасные дома, 27.7 кв.м. в [city|pp] площадью 27.7 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2994, sip-панели, 27.7 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2994, sip-панели, 27.7 кв.м. в [city|pp] площадью 27.7 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3041, кирпич, 89 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3041, кирпич, 89 кв.м. в [city|pp] площадью 89 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3110, газоблок, 23.76 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3110, газоблок, 23.76 кв.м. в [city|pp] площадью 23.76 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3011, каркасные дома, 68.55 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3011, каркасные дома, 68.55 кв.м. в [city|pp] площадью 68.55 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3070, каркасные дома, 87.6 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3070, каркасные дома, 87.6 кв.м. в [city|pp] площадью 87.6 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3108, каркасные дома, 28 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3108, каркасные дома, 28 кв.м. в [city|pp] площадью 28 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3113, каркасные дома, 30.6 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3113, каркасные дома, 30.6 кв.м. в [city|pp] площадью 30.6 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3042, газоблок, 56 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3042, газоблок, 56 кв.м. в [city|pp] площадью 56 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2989, газоблок, 46.51 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2989, газоблок, 46.51 кв.м. в [city|pp] площадью 46.51 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2973, кирпич, 24 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2973, кирпич, 24 кв.м. в [city|pp] площадью 24 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3107, каркасные дома, 23.56 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3107, каркасные дома, 23.56 кв.м. в [city|pp] площадью 23.56 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
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
