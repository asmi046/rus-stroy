<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanya6x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Проект БН-3363, каркасные дома, 31.5 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_442/p442_photo_1.webp',
                'slug' => 'proekt-bn-3363-karkasnye-doma-315-kvm',
                'start_price' => '3000000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_442/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_442/p442_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_442/p442_photo_2.webp'],
                ],
                'layout' => [],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 31.5,
                'wall_material' => 'Каркасные дома',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6х8',
                'extension' => 'С комнатой отдыха',
            ],

[
    'title' => 'Проект БН-3367, каркасные дома, 43.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_443/p443_photo_1.webp',
    'slug' => 'proekt-bn-3367-karkasnye-doma-437-kvm',
    'start_price' => '3700000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_443/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_443/p443_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_443/p443_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 43.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3364, каркасные дома, 45.29 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_444/p444_photo_1.webp',
    'slug' => 'proekt-bn-3364-karkasnye-doma-4529-kvm',
    'start_price' => '3600000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_444/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_444/p444_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_444/p444_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 45.29,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Маудерли , каркасные дома, 54.27 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_445/p445_photo_1.webp',
    'slug' => 'mauderli-karkasnye-doma-5427-kvm',
    'start_price' => '4600000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_445/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_445/p445_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_445/p445_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 2,
    'total_area' => 54.27,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С баней',
],

[
    'title' => 'Проект БН-3365, каркасные дома, 65.93 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_446/p446_photo_1.webp',
    'slug' => 'proekt-bn-3365-karkasnye-doma-6593-kvm',
    'start_price' => '5100000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_446/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_446/p446_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_446/p446_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 65.93,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3362, каркасные дома, 69.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_447/p447_photo_1.webp',
    'slug' => 'proekt-bn-3362-karkasnye-doma-696-kvm',
    'start_price' => '5428800',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_447/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_447/p447_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_447/p447_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_447/p447_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 69.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3361, каркасные дома, 72 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_448/p448_photo_1.webp',
    'slug' => 'proekt-bn-3361-karkasnye-doma-72-kvm',
    'start_price' => '5600000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_448/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_448/p448_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_448/p448_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_448/p448_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 72,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3228, профилированный брус, 28.92 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_449/p449_photo_1.webp',
    'slug' => 'proekt-bn-3228-profilirovannyi-brus-2892-kvm',
    'start_price' => '2313600',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_449/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_449/p449_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_449/p449_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 28.92,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3227, профилированный брус, 33.99 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_450/p450_photo_1.webp',
    'slug' => 'proekt-bn-3227-profilirovannyi-brus-3399-kvm',
    'start_price' => '2719200',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_450/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_450/p450_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 33.99,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Дансоли, оцилиндрованное бревно, 42.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_451/p451_photo_1.webp',
    'slug' => 'dansoli-ocilindrovannoe-brevno-424-kvm',
    'start_price' => '3300000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_451/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_451/p451_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_451/p451_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 42.4,
    'wall_material' => 'Оцилиндрованное бревно',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],


[
    'title' => 'Проект БН-3224, профилированный брус, 43.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_452/p452_photo_1.webp',
    'slug' => 'proekt-bn-3224-profilirovannyi-brus-436-kvm',
    'start_price' => 3400000,
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_452/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_452/p452_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_452/p452_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_452/p452_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 43.6,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3226, профилированный брус, 47.54 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_453/p453_photo_1.webp',
    'slug' => 'proekt-bn-3226-profilirovannyi-brus-4754-kvm',
    'start_price' => '3800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_453/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_453/p453_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_453/p453_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_453/p453_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_453/p453_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 47.54,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Лето, оцилиндрованное бревно, 49.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_454/p454_photo_1.webp',
    'slug' => 'leto-ocilindrovannoe-brevno-492-kvm',
    'start_price' => '3936000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_454/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_454/p454_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_454/p454_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 2,
    'total_area' => 49.2,
    'wall_material' => 'Оцилиндрованное бревно',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Проект БН-3222, профилированный брус, 57.56 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_455/p455_photo_1.webp',
    'slug' => 'proekt-bn-3222-profilirovannyi-brus-5756-kvm',
    'start_price' => '4892600',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_455/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_455/p455_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_455/p455_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_455/p455_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 57.56,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Маргханна , оцилиндрованное бревно, 63.8 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_456/p456_photo_1.webp',
    'slug' => 'margxanna-ocilindrovannoe-brevno-638-kvm',
    'start_price' => '4704000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_456/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_456/p456_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_456/p456_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_456/p456_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 2,
    'total_area' => 63.8,
    'wall_material' => 'Оцилиндрованное бревно',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С комнатой отдыха',
],

[
    'title' => 'Проект БН-3221, профилированный брус, 65.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_457/p457_photo_1.webp',
    'slug' => 'proekt-bn-3221-profilirovannyi-brus-652-kvm',
    'start_price' => '5080000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_457/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_457/p457_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_457/p457_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_457/p457_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 65.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],
[
    'title' => 'Проект БН-3223, профилированный брус, 72 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_458/p458_photo_1.webp',
    'slug' => 'proekt-bn-3223-profilirovannyi-brus-72-kvm',
    'start_price' => '5616000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_458/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_458/p458_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_458/p458_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_458/p458_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_458/p458_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_458/p458_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 72,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

        ];

    $seo_data = [
        [
            'seo_title' => 'Проект БН-3363 - каркасная баня 6х8 с комнатой отдыха 31.5 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3363 размером 6х8 метров с комнатой отдыха. Общая площадь 31.5 кв.м, одноэтажная постройка с высотой потолков 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3367 - каркасная баня 6х8 с террасой 43.7 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3367 размером 6х8 метров с террасой. Общая площадь 43.7 кв.м, одноэтажная конструкция высотой потолков 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3364 - каркасная баня 6х8 с террасой 45.29 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3364 размером 6х8 метров с террасой. Общая площадь 45.29 кв.м, одноэтажное строение с потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Маудерли - двухэтажная каркасная баня 6х8 с баней 54.27 кв.м',
            'seo_description' => 'Проект Маудерли - двухэтажная каркасная баня размером 6х8 метров. Общая площадь 54.27 кв.м с дополнительной баней и потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3365 - каркасная баня 6х8 с террасой 65.93 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3365 размером 6х8 метров с террасой. Одноэтажная постройка площадью 65.93 кв.м с высотой потолков 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3362 - каркасная баня 6х8 с комнатой отдыха 69.6 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3362 размером 6х8 метров с комнатой отдыха. Одноэтажное строение площадью 69.6 кв.м и потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3361 - каркасная баня 6х8 с комнатой отдыха 72 кв.м',
            'seo_description' => 'Проект каркасной бани БН-3361 размером 6х8 метров с комнатой отдыха. Одноэтажная баня площадью 72 кв.м с высотой потолков 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3228 - баня из профилированного бруса 6х8 с комнатой отдыха 28.92 кв.м',
            'seo_description' => 'Проект бани БН-3228 из профилированного бруса размером 6х8 метров с комнатой отдыха. Площадь 28.92 кв.м, одноэтажная с потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3227 - баня из профилированного бруса 6х8 с террасой 33.99 кв.м',
            'seo_description' => 'Проект бани БН-3227 из профилированного бруса размером 6х8 метров с террасой. Одноэтажное строение площадью 33.99 кв.м.',
        ],
        [
            'seo_title' => 'Дансоли - баня из оцилиндрованного бревна 6х8 с террасой 42.4 кв.м',
            'seo_description' => 'Проект бани Дансоли из оцилиндрованного бревна размером 6х8 метров с террасой. Одноэтажная постройка площадью 42.4 кв.м.',
        ],
        [
            'seo_title' => 'Проект БН-3224 - баня из профилированного бруса 6х8 с террасой 43.6 кв.м',
            'seo_description' => 'Проект бани БН-3224 из профилированного бруса размером 6х8 метров с террасой. Одноэтажная баня площадью 43.6 кв.м с потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3226 - баня из профилированного бруса 6х8 с комнатой отдыха 47.54 кв.м',
            'seo_description' => 'Проект бани БН-3226 из профилированного бруса размером 6х8 метров с комнатой отдыха. Площадь 47.54 кв.м, одноэтажная с потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Лето - двухэтажная баня из оцилиндрованного бревна 6х8 с террасой 49.2 кв.м',
            'seo_description' => 'Проект бани Лето из оцилиндрованного бревна размером 6х8 метров с террасой. Двухэтажное строение площадью 49.2 кв.м.',
        ],
        [
            'seo_title' => 'Проект БН-3222 - баня из профилированного бруса 6х8 с террасой 57.56 кв.м',
            'seo_description' => 'Проект бани БН-3222 из профилированного бруса размером 6х8 метров с террасой. Одноэтажная постройка площадью 57.56 кв.м.',
        ],
        [
            'seo_title' => 'Маргханна - двухэтажная баня из оцилиндрованного бревна 6х8 с комнатой отдыха 63.8 кв.м',
            'seo_description' => 'Проект бани Маргханна из оцилиндрованного бревна размером 6х8 метров с комнатой отдыха. Двухэтажная баня площадью 63.8 кв.м.',
        ],
        [
            'seo_title' => 'Проект БН-3221 - баня из профилированного бруса 6х8 с террасой 65.2 кв.м',
            'seo_description' => 'Проект бани БН-3221 из профилированного бруса размером 6х8 метров с террасой. Одноэтажное строение площадью 65.2 кв.м с потолками 2.5 м.',
        ],
        [
            'seo_title' => 'Проект БН-3223 - баня из профилированного бруса 6х8 с террасой 72 кв.м',
            'seo_description' => 'Проект бани БН-3223 из профилированного бруса размером 6х8 метров с террасой. Одноэтажная баня площадью 72 кв.м с высотой потолков 2.5 м.',
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
