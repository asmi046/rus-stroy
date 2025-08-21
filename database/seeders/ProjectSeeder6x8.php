<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder6x8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Одноэтажный дом с панорамными окнами для небольшого участка SD-302',
                'img' => '/tmp_data/projects/pr_107/p107_photo_1.JPG',
                'slug' => 'odnoetaznyi-dom-s-panoramnymi-oknami-dlia-nebolsogo-ucastka-Sd-302',
                'start_price' => ' 4731650 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_107/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_107/p107_photo_1.JPG',
                    '/tmp_data/projects/pr_107/p107_photo_2.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 772,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Дом с  мансардным этажом и  балконом SD-318',
                'img' => '/tmp_data/projects/pr_108/p108_photo_1.JPG',
                'slug' => 'dom-s-mansardnym-etazom-i-balkonom-sd-318',
                'start_price' => ' 5899200 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_108/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_108/p108_photo_1.JPG',
                    '/tmp_data/projects/pr_108/p108_photo_2.JPG',
                    '/tmp_data/projects/pr_108/p108_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 962,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Дом с мансардным этажом и разноуровневой крышей SD-313',
                'img' => '/tmp_data/projects/pr_109/p109_photo_1.JPG',
                'slug' => 'dom-s-mansardnym-etazom-i-raznourovnevoi-krysei-sd-313',
                'start_price' => ' 4362950 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_109/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_109/p109_photo_1.JPG',
                    '/tmp_data/projects/pr_109/p109_photo_2.JPG',
                    '/tmp_data/projects/pr_109/p109_photo_3.JPG',
                    '/tmp_data/projects/pr_109/p109_photo_4.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 712,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с эркером и гаражом  SD-300',
                'img' => '/tmp_data/projects/pr_110/p110_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-erkerom-i-garazom-sd-300',
                'start_price' => ' 9463300 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_110/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_110/p110_photo_1.JPG',
                    '/tmp_data/projects/pr_110/p110_photo_2.JPG',
                    '/tmp_data/projects/pr_110/p110_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1542,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом с четырьмя спальнями и гаражом  SD-301',
                'img' => '/tmp_data/projects/pr_111/p111_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-s-cetyrmia-spalniami-i-garazom-sd-301',
                'start_price' => ' 5960650 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_111/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_111/p111_photo_1.JPG',
                    '/tmp_data/projects/pr_111/p111_photo_2.JPG',
                    '/tmp_data/projects/pr_111/p111_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 972,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
            ],

            [
                'title' => 'Двухэтажный дом для небольшого участка с постирочной SD-299',
                'img' => '/tmp_data/projects/pr_112/p112_photo_1.JPG',
                'slug' => 'dvuxetaznyi-dom-dlia-nebolsogo-ucastka-s-postirocnoi-Sd-299',
                'start_price' => ' 6206450 ',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_112/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_112/p112_photo_1.JPG',
                    '/tmp_data/projects/pr_112/p112_photo_2.JPG',
                    '/tmp_data/projects/pr_112/p112_photo_3.JPG',
                ],
                'layout' => [],
                'type' => 'Дом',
                'floors' => 2,
                'total_area' => 1012,
                'wall_material' => 'Газобетон',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '6x8',
                'extension' => null,
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
                    // 'seo_title' => $seo_data[$i]['seo_title'],
                    // 'seo_description' => $seo_data[$i]['seo_description'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );

            $i++;
        }


    }
}
