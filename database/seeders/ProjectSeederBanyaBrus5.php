<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus5 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => '"Проект БН-3431", каркасные дома, 20.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_308/p308_photo_1.webp',
    'slug' => 'proekt-bn-3431-karkasnye-doma-207-kvm-v-nefteiuganske',
    'start_price' => '250000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_308/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_308/p308_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_308/p308_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 20.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3406", каркасные дома, 15.48 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_309/p309_photo_1.webp',
    'slug' => 'proekt-bn-3406-karkasnye-doma-1548-kvm-v-nefteiuganske',
    'start_price' => '185000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_309/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_309/p309_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_309/p309_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.48,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3387", каркасные дома, 9.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_310/p310_photo_1.webp',
    'slug' => 'proekt-bn-3387-karkasnye-doma-97-kvm-v-nefteiuganske',
    'start_price' => '119717',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_310/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_310/p310_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_310/p310_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 9.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3390", каркасные дома, 12.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_311/p311_photo_1.webp',
    'slug' => 'proekt-bn-3390-karkasnye-doma-1275-kvm-v-nefteiuganske',
    'start_price' => '145000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_311/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_311/p311_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_311/p311_photo_2.webp'],
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
    'title' => '"Проект БН-3397", каркасные дома, 12.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_312/p312_photo_1.webp',
    'slug' => 'proekt-bn-3397-karkasnye-doma-1275-kvm-v-nefteiuganske',
    'start_price' => '141000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_312/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_312/p312_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_312/p312_photo_2.webp'],
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
    'title' => '"Проект БН-3416", каркасные дома, 13.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_315/p315_photo_1.webp',
    'slug' => 'proekt-bn-3416-karkasnye-doma-136-kvm-v-nefteiuganske',
    'start_price' => '150000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_315/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_315/p315_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_315/p315_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3415", каркасные дома, 20.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_316/p316_photo_1.webp',
    'slug' => 'proekt-bn-3415-karkasnye-doma-204-kvm-v-nefteiuganske',
    'start_price' => '230000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_316/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_316/p316_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_316/p316_photo_2.webp'],
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
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3407", каркасные дома, 13.87 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_317/p317_photo_1.webp',
    'slug' => 'proekt-bn-3407-karkasnye-doma-1387-kvm-v-nefteiuganske',
    'start_price' => '160000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_317/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_317/p317_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_317/p317_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.87,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3434", каркасные дома, 20.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_318/p318_photo_1.webp',
    'slug' => 'proekt-bn-3434-karkasnye-doma-206-kvm-v-nefteiuganske',
    'start_price' => '225000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_318/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_318/p318_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_318/p318_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 20.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3380", каркасные дома, 9.53 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_319/p319_photo_1.webp',
    'slug' => 'proekt-bn-3380-karkasnye-doma-953-kvm-v-nefteiuganske',
    'start_price' => '117619',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_319/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_319/p319_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_319/p319_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 9.53,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],


[
    'title' => '"Проект БН-3375", каркасные дома, 9.53 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_320/p320_photo_1.webp',
    'slug' => 'proekt-bn-3375-karkasnye-doma-953-kvm-v-nefteiuganske',
    'start_price' => '105000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_320/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_320/p320_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_320/p320_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 9.53,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3400", каркасные дома, 14.48 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_321/p321_photo_1.webp',
    'slug' => 'proekt-bn-3400-karkasnye-doma-1448-kvm-v-nefteiuganske',
    'start_price' => '150100',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_321/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_321/p321_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_321/p321_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 14.48,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3398", каркасные дома, 17.49 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_322/p322_photo_1.webp',
    'slug' => 'proekt-bn-3398-karkasnye-doma-1749-kvm-v-nefteiuganske',
    'start_price' => '205000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_322/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_322/p322_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_322/p322_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17.49,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3428", каркасные дома, 21.28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_323/p323_photo_1.webp',
    'slug' => 'proekt-bn-3428-karkasnye-doma-2128-kvm-v-nefteiuganske',
    'start_price' => '262638',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_323/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_323/p323_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_323/p323_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 21.28,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3391", каркасные дома, 12.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_324/p324_photo_1.webp',
    'slug' => 'proekt-bn-3391-karkasnye-doma-1275-kvm-v-nefteiuganske',
    'start_price' => '145000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_324/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_324/p324_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_324/p324_photo_2.webp'],
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
    'title' => '"Проект БН-3417", каркасные дома, 10.1 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_325/p325_photo_1.webp',
    'slug' => 'proekt-bn-3417-karkasnye-doma-101-kvm-v-nefteiuganske',
    'start_price' => '121000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_325/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_325/p325_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_325/p325_photo_2.webp'],
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
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3430", каркасные дома, 17.48 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_326/p326_photo_1.webp',
    'slug' => 'proekt-bn-3430-karkasnye-doma-1748-kvm-v-nefteiuganske',
    'start_price' => '204000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_326/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_326/p326_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_326/p326_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17.48,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3410", каркасные дома, 13.88 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_327/p327_photo_1.webp',
    'slug' => 'proekt-bn-3410-karkasnye-doma-1388-kvm-v-nefteiuganske',
    'start_price' => '171307',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_327/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_327/p327_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_327/p327_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.88,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3405", каркасные дома, 15.68 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_328/p328_photo_1.webp',
    'slug' => 'proekt-bn-3405-karkasnye-doma-1568-kvm-v-nefteiuganske',
    'start_price' => '193523',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_328/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_328/p328_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_328/p328_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.68,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3409", каркасные дома, 13.87 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_329/p329_photo_1.webp',
    'slug' => 'proekt-bn-3409-karkasnye-doma-1387-kvm-v-nefteiuganske',
    'start_price' => '140000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_329/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_329/p329_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_329/p329_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.87,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3418", каркасные дома, 11.78 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_330/p330_photo_1.webp',
    'slug' => 'proekt-bn-3418-karkasnye-doma-1178-kvm-v-nefteiuganske',
    'start_price' => '135000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_330/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_330/p330_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_330/p330_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 11.78,
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
            'seo_title' => 'Проект БН-3431 - каркасная баня 20.7 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 20.7 кв.м. Проект БН-3431. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3406 - каркасная баня 15.48 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 15.48 кв.м. Проект БН-3406. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3387 - каркасная баня 9.7 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 9.7 кв.м. Проект БН-3387. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3390 - каркасная баня 12.75 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 12.75 кв.м. Проект БН-3390. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3397 - каркасная баня 12.75 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 12.75 кв.м. Проект БН-3397. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3416 - каркасная баня 13.6 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 13.6 кв.м. Проект БН-3416. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3415 - каркасная баня 20.4 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 20.4 кв.м. Проект БН-3415. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3407 - каркасная баня 13.87 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 13.87 кв.м. Проект БН-3407. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3434 - каркасная баня 20.6 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 20.6 кв.м. Проект БН-3434. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3380 - каркасная баня 9.53 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 9.53 кв.м. Проект БН-3380. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3375 - каркасная баня 9.53 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 9.53 кв.м. Проект БН-3375. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3400 - каркасная баня 14.48 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 14.48 кв.м. Проект БН-3400. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3398 - каркасная баня 17.49 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 17.49 кв.м. Проект БН-3398. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3428 - каркасная баня 21.28 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 21.28 кв.м. Проект БН-3428. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3391 - каркасная баня 12.75 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 12.75 кв.м. Проект БН-3391. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3417 - каркасная баня 10.1 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 10.1 кв.м. Проект БН-3417. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3430 - каркасная баня 17.48 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 17.48 кв.м. Проект БН-3430. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3410 - каркасная баня 13.88 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 13.88 кв.м. Проект БН-3410. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3405 - каркасная баня 15.68 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 15.68 кв.м. Проект БН-3405. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3409 - каркасная баня 13.87 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 13.87 кв.м. Проект БН-3409. Цена, фото, планировка, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3418 - каркасная баня 11.78 кв.м. в [city|pp]',
            'seo_description' => 'Каркасная баня 11.78 кв.м. Проект БН-3418. Цена, фото, планировка, строительство в [city|pp].',
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
