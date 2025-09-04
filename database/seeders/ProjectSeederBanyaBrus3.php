<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => '"Проект БН-3330", Профилированный брус, 21.13 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_271/p271_photo_1.webp',
    'slug' => 'proekt-bn-3330-profilirovannyi-brus-2113-kvm-v-nefteiuganske',
    'start_price' => '220000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_271/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_271/p271_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_271/p271_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 21.13,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3240", Профилированный брус, 44.28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_272/p272_photo_1.webp',
    'slug' => 'proekt-bn-3240-profilirovannyi-brus-4428-kvm-v-nefteiuganske',
    'start_price' => '546504',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_272/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_272/p272_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 44.28,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3271", Профилированный брус, 11.76 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_273/p273_photo_1.webp',
    'slug' => 'proekt-bn-3271-profilirovannyi-brus-1176-kvm-v-nefteiuganske',
    'start_price' => '140000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_273/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_273/p273_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_273/p273_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_273/p273_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_273/p273_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 11.76,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3239", Профилированный брус, 41.76 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_274/p274_photo_1.webp',
    'slug' => 'proekt-bn-3239-profilirovannyi-brus-4176-kvm-v-nefteiuganske',
    'start_price' => '490000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_274/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_274/p274_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_274/p274_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 41.76,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3310", Профилированный брус, 17 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_275/p275_photo_1.webp',
    'slug' => 'proekt-bn-3310-profilirovannyi-brus-17-kvm-v-nefteiuganske',
    'start_price' => '195000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_275/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_275/p275_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_275/p275_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Изора ", Профилированный брус, 31.75 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_276/p276_photo_1.webp',
    'slug' => 'izora-profilirovannyi-brus-3175-kvm-v-nefteiuganske',
    'start_price' => '391859',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_276/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_276/p276_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_276/p276_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_276/p276_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 31.75,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3324", Профилированный брус, 31.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_277/p277_photo_1.webp',
    'slug' => 'proekt-bn-3324-profilirovannyi-brus-314-kvm-v-nefteiuganske',
    'start_price' => '420000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_277/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_277/p277_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_277/p277_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_277/p277_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 31.4,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3313", Профилированный брус, 10.05 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_278/p278_photo_1.webp',
    'slug' => 'proekt-bn-3313-profilirovannyi-brus-1005-kvm-v-nefteiuganske',
    'start_price' => '115000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_278/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_278/p278_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_278/p278_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.05,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3242", Профилированный брус, 30.1 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_279/p279_photo_1.webp',
    'slug' => 'proekt-bn-3242-profilirovannyi-brus-301-kvm-v-nefteiuganske',
    'start_price' => '320000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_279/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_279/p279_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_279/p279_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 30.1,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Эвхарис", Профилированный брус, 48.14 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_280/p280_photo_1.webp',
    'slug' => 'evxaris-profilirovannyi-brus-4814-kvm-v-nefteiuganske',
    'start_price' => '510000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_280/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_280/p280_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_280/p280_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_280/p280_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 48.14,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => '"Дафна ", Профилированный брус, 55.85 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_281/p281_photo_1.webp',
    'slug' => 'dafna-profilirovannyi-brus-5585-kvm-v-nefteiuganske',
    'start_price' => '620000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_281/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_281/p281_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_281/p281_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_281/p281_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_281/p281_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_281/p281_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_281/p281_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 55.85,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х9',
    'extension' => null,
],

[
    'title' => '"Карла ", Профилированный брус, 17.06 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_282/p282_photo_1.webp',
    'slug' => 'karla-profilirovannyi-brus-1706-kvm-v-nefteiuganske',
    'start_price' => '190000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_282/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_282/p282_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_282/p282_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17.06,
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
            'seo_title' => 'Проект БН-3330 — Баня из профилированного бруса 21.13 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3330 из профилированного бруса площадью 21.13 кв.м. Цена от 220000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3240 — Баня из профилированного бруса 44.28 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3240 из профилированного бруса площадью 44.28 кв.м. Цена от 546504 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3271 — Баня из профилированного бруса 11.76 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3271 из профилированного бруса площадью 11.76 кв.м. Цена от 140000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3239 — Баня из профилированного бруса 41.76 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3239 из профилированного бруса площадью 41.76 кв.м. Цена от 490000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3310 — Баня из профилированного бруса 17 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3310 из профилированного бруса площадью 17 кв.м. Цена от 195000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Изора — Баня из профилированного бруса 31.75 кв.м в [city|pp]',
            'seo_description' => 'Баня Изора из профилированного бруса площадью 31.75 кв.м. Цена от 391859 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3324 — Баня из профилированного бруса 31.4 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3324 из профилированного бруса площадью 31.4 кв.м. Цена от 420000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3313 — Баня из профилированного бруса 10.05 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3313 из профилированного бруса площадью 10.05 кв.м. Цена от 115000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3242 — Баня из профилированного бруса 30.1 кв.м в [city|pp]',
            'seo_description' => 'Баня по проекту БН-3242 из профилированного бруса площадью 30.1 кв.м. Цена от 320000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Эвхарис — Баня из профилированного бруса 48.14 кв.м в [city|pp]',
            'seo_description' => 'Баня Эвхарис из профилированного бруса площадью 48.14 кв.м. Цена от 510000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Дафна — Баня из профилированного бруса 55.85 кв.м в [city|pp]',
            'seo_description' => 'Баня Дафна из профилированного бруса площадью 55.85 кв.м. Цена от 620000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Карла — Баня из профилированного бруса 17.06 кв.м в [city|pp]',
            'seo_description' => 'Баня Карла из профилированного бруса площадью 17.06 кв.м. Цена от 190000 руб. Фото, планировка, подробное описание. Закажите строительство в [city|pp].',
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
