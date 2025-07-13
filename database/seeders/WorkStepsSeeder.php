<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class WorkStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'step_number' => 1,
                'step_name' => 'Шаг 1',
                'description' => file_get_contents(public_path('tmp_data/steps/1.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/1_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/1_d.html')),
            ],

            [
                'step_number' => 2,
                'step_name' => 'Шаг 2',
                'description' => file_get_contents(public_path('tmp_data/steps/2.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/2_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/2_d.html')),
            ],

            [
                'step_number' => 3,
                'step_name' => 'Шаг 3',
                'description' => file_get_contents(public_path('tmp_data/steps/3.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/3_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/3_d.html')),
            ],
            [
                'step_number' => 4,
                'step_name' => 'Шаг 4',
                'description' => file_get_contents(public_path('tmp_data/steps/4.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/4_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/4_d.html')),
            ],
            [
                'step_number' => 5,
                'step_name' => 'Шаг 5',
                'description' => file_get_contents(public_path('tmp_data/steps/5.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/5_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/5_d.html')),
            ],
            [
                'step_number' => 6,
                'step_name' => 'Шаг 6',
                'description' => file_get_contents(public_path('tmp_data/steps/6.html')),
                'sub_description' => file_get_contents(public_path('tmp_data/steps/6_p.html')),
                'additional_description' => file_get_contents(public_path('tmp_data/steps/6_d.html')),
            ],
        ];

        foreach ($data as $item) {
            DB::table("work_steps")->insert($item);
        }
    }
}
