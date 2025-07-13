<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Проект дома "Маршак"',
                'img' => '/tmp_data/projects/pr_1/p1_main.jpeg',
                'slug' => 'proekt-doma-marshak',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_1/ds.html')),
                'gallery' => [
                    '/tmp_data/projects/pr_1/p1_photo_1.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_2.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_3.jpeg',
                    '/tmp_data/projects/pr_1/p1_photo_4.jpeg'
                ],
                'layout' => [
                    '/tmp_data/projects/pr_1/p1_plan_1.jpeg',
                ],
                'type' => 'Дом',
                'floors' => 1,
                'total_area' => 68,
                'wall_material' => 'СИП-панели',
                'foundation' => 'Ленточный фундамент',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '9,4 x 8,7 м',
                'extension' => null,

            ]
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
