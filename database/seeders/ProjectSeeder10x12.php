<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder10x12 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Красивый одноэтажный дом под четырехскатной крышей PD-244',
                'img' => '/tmp_data/projects/pr_142/p142_photo_1.JPG',
                'slug' => 'krasivyi-odnoetaznyi-dom-pod-cetyrexskatnoi-krysei-sd-244',
                'start_price' => ' 4653750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_142/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_142/p142_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_142/p142_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_142/p142_photo_3.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_142/p142_photo_4.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 73,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],

            [
                'title' => 'Дом с панорамными окнами в столовой PD-209',
                'img' => '/tmp_data/projects/pr_143/p143_photo_1.JPG',
                'slug' => 'dom-s-panoramnymi-oknami-v-stolovoi-sd-209',
                'start_price' => ' 11475000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_143/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_143/p143_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_143/p143_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 180,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],

            [
                'title' => 'Дом со скатной крышей  в скандинавском стиле DS-02',
                'img' => '/tmp_data/projects/pr_144/p144_photo_1.JPG',
                'slug' => 'dom-so-skatnoi-krysei-v-skandinavskom-stile-ds-02',
                'start_price' => ' 5737500 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_144/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_144/p144_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_144/p144_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_144/p144_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_144/p144_photo_4.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_144/p144_photo_5.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 90,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом со вторым светом DС-03/1',
                'img' => '/tmp_data/projects/pr_145/p145_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-so-vtorym-svetom-ds-031',
                'start_price' => ' 8925000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_145/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_145/p145_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_145/p145_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_145/p145_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_145/p145_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_145/p145_photo_5.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_145/p145_photo_6.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 140,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],

            [
                'title' => 'Небольшой одноэтажный дом с тремя спальнями PD-101',
                'img' => '/tmp_data/projects/pr_146/p146_photo_1.JPG',
                'slug' => 'nebolsoi-odnoetaznyi-dom-s-tremia-spalniami-sd-101',
                'start_price' => ' 4845000 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_146/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_146/p146_photo_7.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_146/p146_photo_8.JPG']],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 762,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],
            [
                'title' => 'Мансардный проект дома с двухскатной крышей PD-091',
                'img' => '/tmp_data/projects/pr_147/p147_photo_1.JPG',
                'slug' => 'mansardnyi-proekt-doma-s-dvuxskatnoi-krysei-sd-091',
                'start_price' => ' 9753750 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_147/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_1.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_2.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_3.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_4.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_5.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_6.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_7.JPG'],
                    ['img' => '/tmp_data/projects/pr_147/p147_photo_8.JPG'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_147/p147_photo_9.JPG']],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 153,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '10x12',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Красивый одноэтажный дом под четырехскатной крышей PD-244 – строительство в [city|pp]',
                'seo_description' => 'Проект стильного одноэтажного дома площадью 73 м² с четырехскатной крышей. Комфортное и современное решение для семьи, доступное для строительства в [city|pp].',
            ],

            [
                'seo_title' => 'Дом с панорамными окнами в столовой PD-209 – проект в [city|pp]',
                'seo_description' => 'Просторный двухэтажный дом площадью 180 м² с панорамным остеклением. Эстетика и уют в современном стиле – готов к реализации в [city|pp].',
            ],

            [
                'seo_title' => 'Дом со скатной крышей в скандинавском стиле DS-02 – проект в [city|pp]',
                'seo_description' => 'Одноэтажный дом площадью 90 м² в минималистичном скандинавском стиле. Практичное и стильное решение для строительства в [city|pp].',
            ],

            [
                'seo_title' => 'Двухэтажный дом со вторым светом DS-03/1 – современный проект в [city|pp]',
                'seo_description' => 'Современный проект DS-03/1: просторный дом площадью 140 м² с эффектным вторым светом. Стильное и надежное жильё для комфортной жизни в [city|pp].',
            ],

            [
                'seo_title' => 'Небольшой одноэтажный дом с тремя спальнями PD-101 – проект в [city|pp]',
                'seo_description' => 'Уютный дом PD-101 площадью 76 м². Три спальни, продуманная планировка и современные материалы – практичное решение для строительства под ключ в [city|pp].',
            ],

            [
                'seo_title' => 'Мансардный дом с двухскатной крышей PD-091 – проект в [city|pp]',
                'seo_description' => 'Проект PD-091: стильный мансардный дом площадью 153 м² с двухскатной крышей. Комфортное и надёжное жильё, готовое для реализации в [city|pp].',
            ],
        ];

        $i = 0;
        foreach ($data as $item) {

            $img_name = basename($item['img']);
            Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($item['img'])), 'public');
            $item['img'] = "projects/".$img_name;

            foreach($item['gallery'] as $key => $image) {
                $img_name = basename($image);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image)), 'public');
                $item['gallery'][$key] = "projects/".$img_name;
            }

            $item['gallery'] = json_encode($item['gallery']);

            foreach($item['layout'] as $key => $image) {
                $img_name = basename($image);
                Storage::disk('public')->put("projects/".$img_name, file_get_contents(public_path($image)), 'public');
                $item['layout'][$key] = "projects/".$img_name;
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
