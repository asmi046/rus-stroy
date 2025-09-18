<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBesedka extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
    'title' => 'Беседка Анастасия, каркасные дома, 11 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_378/p378_photo_1.webp',
    'slug' => 'anastasiia-karkasnye-doma-11-kvm-v-sankt-peterburge',
    'start_price' => '660000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_378/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_378/p378_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_378/p378_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 11,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Боева, профилированный брус, 28 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_379/p379_photo_1.webp',
    'slug' => 'boeva-profilirovannyi-brus-28-kvm-v-sankt-peterburge',
    'start_price' => '1680000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_379/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_379/p379_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_379/p379_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_379/p379_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 28,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Истоки, брус строганый, 12 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_380/p380_photo_1.webp',
    'slug' => 'istoki-brus-stroganyi-12-kvm-v-sankt-peterburge',
    'start_price' => '1000000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_380/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_380/p380_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_380/p380_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_380/p380_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_380/p380_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 12,
    'wall_material' => 'Брус строганый',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Латвия, лафет, 16 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_381/p381_photo_1.webp',
    'slug' => 'latviia-lafet-16-kvm-v-sankt-peterburge',
    'start_price' => '890000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_381/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_381/p381_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_381/p381_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_381/p381_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_381/p381_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 16,
    'wall_material' => 'Лафет',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Гормуция, каркасные дома, 9 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_382/p382_photo_1.webp',
    'slug' => 'gormuciia-karkasnye-doma-9-kvm-v-sankt-peterburge',
    'start_price' => '490000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_382/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_382/p382_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_382/p382_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 9,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Фтия, оцилиндрованное бревно, 16 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_383/p383_photo_1.webp',
    'slug' => 'ftiia-ocilindrovannoe-brevno-16-kvm-v-sankt-peterburge',
    'start_price' => '960000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_383/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_383/p383_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_383/p383_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_383/p383_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_383/p383_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_383/p383_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 16,
    'wall_material' => 'Оцилиндрованное бревно',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

[
    'title' => 'Беседка Гульдения, каркасные дома, 12 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_384/p384_photo_1.webp',
    'slug' => 'guldeniia-karkasnye-doma-12-kvm-v-sankt-peterburge',
    'start_price' => '650000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_384/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_384/p384_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_384/p384_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_384/p384_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_384/p384_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_384/p384_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Беседка',
    'floors' => 1,
    'total_area' => 12,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '',
    'extension' => null,
],

        ];

        $seo_data = [
            [
            'seo_title' => 'Беседка Анастасия, каркасные дома, 11 кв.м. в [city|pp] - проект, цена, фото',
            'seo_description' => 'Проект беседки Анастасия площадью 11 кв.м. из каркасных домов. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Боева, профилированный брус, 28 кв.м. в [city|pp] - проект, цена, фото',
            'seo_description' => 'Проект беседки Боева площадью 28 кв.м. из профилированного бруса. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Истоки, брус строганый, 12 кв.м. в [city|pp] - проект, фото, характеристики',
            'seo_description' => 'Проект беседки Истоки площадью 12 кв.м. из строганого бруса. Фото, планировка, характеристики, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Латвия, лафет, 16 кв.м. в [city|pp] - проект, фото, характеристики',
            'seo_description' => 'Проект беседки Латвия площадью 16 кв.м. из лафета. Фото, планировка, характеристики, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Гормуция, каркасные дома, 9 кв.м. в [city|pp] - проект, фото, характеристики',
            'seo_description' => 'Проект беседки Гормуция площадью 9 кв.м. из каркасных домов. Фото, планировка, характеристики, строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Фтия, оцилиндрованное бревно, 16 кв.м. в [city|pp] - проект, цена, фото',
            'seo_description' => 'Проект беседки Фтия площадью 16 кв.м. из оцилиндрованного бревна. Фото, планировка, характеристики, стоимость строительства в [city|pp].',
            ],
            [
            'seo_title' => 'Беседка Гульдения, каркасные дома, 12 кв.м. в [city|pp] - проект, фото, характеристики',
            'seo_description' => 'Проект беседки Гульдения площадью 12 кв.м. из каркасных домов. Фото, планировка, характеристики, строительство в [city|pp].',
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
