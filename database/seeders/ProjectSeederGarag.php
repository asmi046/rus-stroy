<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederGarag extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => 'Проект гаража ГР-3084, sip-панели, 24 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_385/p385_photo_1.webp',
    'slug' => 'proekt-gr-3084-sip-paneli-24-kvm-v-sankt-peterburge',
    'start_price' => '1400000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_385/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_385/p385_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 24,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x6',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-2991, каркасные дома, 36 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_386/p386_photo_1.webp',
    'slug' => 'proekt-gr-2991-karkasnye-doma-36-kvm-v-sankt-peterburge',
    'start_price' => '2160000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_386/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_386/p386_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_386/p386_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 36,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x7',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-2983, газоблок, 72 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_387/p387_photo_1.webp',
    'slug' => 'proekt-gr-2983-gazoblok-72-kvm-v-sankt-peterburge',
    'start_price' => '4240000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_387/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_387/p387_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_387/p387_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_387/p387_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 72,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x12',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3009, газоблок, 56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_388/p388_photo_1.webp',
    'slug' => 'proekt-gr-3009-gazoblok-56-kvm-v-sankt-peterburge',
    'start_price' => '3200000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_388/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_388/p388_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_388/p388_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_388/p388_photo_3.webp'],
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
    'plan_dimensions' => '7x8',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3069, каркасные дома, 87.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_389/p389_photo_1.webp',
    'slug' => 'proekt-gr-3069-karkasnye-doma-876-kvm-v-sankt-peterburge',
    'start_price' => '4900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_389/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_389/p389_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_389/p389_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_389/p389_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_389/p389_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_389/p389_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_389/p389_photo_6.webp'],
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
    'title' => 'Проект гаража ГР-3036, кирпич, 85.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_390/p390_photo_1.webp',
    'slug' => 'proekt-gr-3036-kirpic-854-kvm-v-sankt-peterburge',
    'start_price' => '4800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_390/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_390/p390_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_390/p390_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 85.4,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x12',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3033, sip-панели, 77.28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_391/p391_photo_1.webp',
    'slug' => 'proekt-gr-3033-sip-paneli-7728-kvm-v-sankt-peterburge',
    'start_price' => '4300000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_391/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_391/p391_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_391/p391_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_391/p391_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 77.28,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x10',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3010, газоблок, 54.88 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_392/p392_photo_1.webp',
    'slug' => 'proekt-gr-3010-gazoblok-5488-kvm-v-sankt-peterburge',
    'start_price' => '3120000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_392/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_392/p392_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_392/p392_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 54.88,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x8',
    'extension' => 'С мастерской',
],


[
    'title' => 'Проект гаража ГР-3099, кирпич, 67.25 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_393/p393_photo_1.webp',
    'slug' => 'proekt-gr-3099-kirpic-6725-kvm-v-sankt-peterburge',
    'start_price' => '3900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_393/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_393/p393_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_393/p393_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 67.25,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8x16',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3016, кирпич, 65.55 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_394/p394_photo_1.webp',
    'slug' => 'proekt-gr-3016-kirpic-6555-kvm-v-sankt-peterburge',
    'start_price' => '3400000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_394/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_394/p394_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_394/p394_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_394/p394_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 65.55,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x9',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3100, газоблок, 174.72 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_395/p395_photo_1.webp',
    'slug' => 'proekt-gr-3100-gazoblok-17472-kvm-v-sankt-peterburge',
    'start_price' => '10400000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_395/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_395/p395_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_395/p395_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_395/p395_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_395/p395_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_395/p395_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 2,
    'total_area' => 174.72,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '14x7',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3046, каркасные дома, 44.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_396/p396_photo_1.webp',
    'slug' => 'proekt-gr-3046-karkasnye-doma-447-kvm-v-sankt-peterburge',
    'start_price' => '2682000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_396/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_396/p396_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_396/p396_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 44.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8x8',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-3111, газоблок, 21.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_397/p397_photo_1.webp',
    'slug' => 'proekt-gr-3111-gazoblok-214-kvm-v-sankt-peterburge',
    'start_price' => '1120000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_397/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_397/p397_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_397/p397_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 21.4,
    'wall_material' => 'Газоблок',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x7',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3014, кирпич, 62.56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_398/p398_photo_1.webp',
    'slug' => 'proekt-gr-3014-kirpic-6256-kvm-v-sankt-peterburge',
    'start_price' => '3300000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_398/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_398/p398_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_398/p398_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_398/p398_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 62.56,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x9',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-2992, sip-панели, 21 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_399/p399_photo_1.webp',
    'slug' => 'proekt-gr-2992-sip-paneli-21-kvm-v-sankt-peterburge',
    'start_price' => '1260000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_399/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_399/p399_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_399/p399_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 21,
    'wall_material' => 'Sip-панели',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x7',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-2970, каркасные дома, 44.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_400/p400_photo_1.webp',
    'slug' => 'proekt-gr-2970-karkasnye-doma-442-kvm-v-sankt-peterburge',
    'start_price' => '2310000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_400/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_400/p400_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_400/p400_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 44.2,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6x10',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3080, кирпич, 51.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_401/p401_photo_1.webp',
    'slug' => 'proekt-gr-3080-kirpic-512-kvm-v-sankt-peterburge',
    'start_price' => '2800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_401/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_401/p401_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_401/p401_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_401/p401_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_401/p401_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_401/p401_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_401/p401_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 51.2,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8x12',
    'extension' => 'С навесом',
],

[
    'title' => 'Проект гаража ГР-2984, кирпич, 29.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_402/p402_photo_1.webp',
    'slug' => 'proekt-gr-2984-kirpic-2975-kvm-v-sankt-peterburge',
    'start_price' => '1785000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_402/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_402/p402_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_402/p402_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 29.75,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3x8',
    'extension' => 'С мастерской',
],

[
    'title' => 'Проект гаража ГР-3106, кирпич, 24.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_403/p403_photo_1.webp',
    'slug' => 'proekt-gr-3106-kirpic-244-kvm-v-sankt-peterburge',
    'start_price' => '1150000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_403/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_403/p403_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_403/p403_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 24.4,
    'wall_material' => 'Кирпич',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4x6',
    'extension' => null,
],

[
    'title' => 'Проект гаража ГР-3032, каркасные дома, 52.78 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_405/p405_photo_1.webp',
    'slug' => 'proekt-gr-3032-karkasnye-doma-5278-kvm-v-sankt-peterburge',
    'start_price' => '3166800',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_405/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_405/p405_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_405/p405_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Гараж',
    'floors' => 1,
    'total_area' => 52.78,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7x10',
    'extension' => 'С навесом',
],
        ];

        $seo_data = [
            [
                'seo_title' => 'Проект гаража ГР-3084, sip-панели, 24 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3084, sip-панели, 24 кв.м. в [city|pp] площадью 24 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2991, каркасные дома, 36 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2991, каркасные дома, 36 кв.м. в [city|pp] площадью 36 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2983, газоблок, 72 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2983, газоблок, 72 кв.м. в [city|pp] площадью 72 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3009, газоблок, 56 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3009, газоблок, 56 кв.м. в [city|pp] площадью 56 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3069, каркасные дома, 87.6 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3069, каркасные дома, 87.6 кв.м. в [city|pp] площадью 87.6 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3036, кирпич, 85.4 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3036, кирпич, 85.4 кв.м. в [city|pp] площадью 85.4 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3033, sip-панели, 77.28 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3033, sip-панели, 77.28 кв.м. в [city|pp] площадью 77.28 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3010, газоблок, 54.88 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3010, газоблок, 54.88 кв.м. в [city|pp] площадью 54.88 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3099, кирпич, 67.25 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3099, кирпич, 67.25 кв.м. в [city|pp] площадью 67.25 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3016, кирпич, 65.55 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3016, кирпич, 65.55 кв.м. в [city|pp] площадью 65.55 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3100, газоблок, 174.72 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3100, газоблок, 174.72 кв.м. в [city|pp] площадью 174.72 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3046, каркасные дома, 44.7 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3046, каркасные дома, 44.7 кв.м. в [city|pp] площадью 44.7 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3111, газоблок, 21.4 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3111, газоблок, 21.4 кв.м. в [city|pp] площадью 21.4 кв.м. из Газоблок. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3014, кирпич, 62.56 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3014, кирпич, 62.56 кв.м. в [city|pp] площадью 62.56 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2992, sip-панели, 21 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2992, sip-панели, 21 кв.м. в [city|pp] площадью 21 кв.м. из Sip-панели. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2970, каркасные дома, 44.2 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2970, каркасные дома, 44.2 кв.м. в [city|pp] площадью 44.2 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3080, кирпич, 51.2 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3080, кирпич, 51.2 кв.м. в [city|pp] площадью 51.2 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-2984, кирпич, 29.75 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-2984, кирпич, 29.75 кв.м. в [city|pp] площадью 29.75 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3106, кирпич, 24.4 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3106, кирпич, 24.4 кв.м. в [city|pp] площадью 24.4 кв.м. из Кирпич. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
                'seo_title' => 'Проект гаража ГР-3032, каркасные дома, 52.78 кв.м. в [city|pp] - проект, цена, фото',
                'seo_description' => 'Проект Проект гаража ГР-3032, каркасные дома, 52.78 кв.м. в [city|pp] площадью 52.78 кв.м. из Каркасные дома. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
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
