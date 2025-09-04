<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

[
    'title' => '"Карина ", Профилированный брус, 120.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_261/p261_photo_1.webp',
    'slug' => 'karina-profilirovannyi-brus-1205-kvm-v-nefteiuganske',
    'start_price' => '1400000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_261/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_261/p261_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_261/p261_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_261/p261_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_261/p261_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 120.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х15',
    'extension' => null,
],

[
    'title' => '"Проект БН-3261", Профилированный брус, 48.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_262/p262_photo_1.webp',
    'slug' => 'proekt-bn-3261-profilirovannyi-brus-484-kvm-v-nefteiuganske',
    'start_price' => '550000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_262/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_262/p262_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_262/p262_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 48.4,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х8',
    'extension' => null,
],

[
    'title' => '"Киприя ", Профилированный брус, 136.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_263/p263_photo_1.webp',
    'slug' => 'kipriia-profilirovannyi-brus-1362-kvm-v-nefteiuganske',
    'start_price' => '1500000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_263/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_263/p263_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_263/p263_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_263/p263_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_263/p263_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 136.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х13',
    'extension' => null,
],

[
    'title' => '"Проект БН-3296", Профилированный брус, 14.26 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_264/p264_photo_1.webp',
    'slug' => 'proekt-bn-3296-profilirovannyi-brus-1426-kvm-v-nefteiuganske',
    'start_price' => '157000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_264/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_264/p264_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_264/p264_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_264/p264_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_264/p264_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_264/p264_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_264/p264_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 14.26,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Звездара ", Профилированный брус, 24.51 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_265/p265_photo_1.webp',
    'slug' => 'zvezdara-profilirovannyi-brus-2451-kvm-v-nefteiuganske',
    'start_price' => '302502',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_265/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_265/p265_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_265/p265_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_265/p265_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_265/p265_photo_4.png'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 24.51,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3305", Профилированный брус, 13.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_266/p266_photo_1.webp',
    'slug' => 'proekt-bn-3305-profilirovannyi-brus-136-kvm-v-nefteiuganske',
    'start_price' => '167851',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_266/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_266/p266_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_266/p266_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 13.6,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],

[
    'title' => '"Цецилия", Профилированный брус, 18 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_267/p267_photo_1.webp',
    'slug' => 'ceciliia-profilirovannyi-brus-18-kvm-v-nefteiuganske',
    'start_price' => '210000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_267/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_267/p267_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_267/p267_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_267/p267_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 18,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '5х5',
    'extension' => null,
],

[
    'title' => '"Помпея", Профилированный брус, 36.61 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_268/p268_photo_1.webp',
    'slug' => 'pompeia-profilirovannyi-brus-3661-kvm-v-nefteiuganske',
    'start_price' => '451841',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_268/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_268/p268_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_268/p268_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_268/p268_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 36.61,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х9',
    'extension' => null,
],

[
    'title' => '"Проект БН-3243", Профилированный брус, 34.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_269/p269_photo_1.webp',
    'slug' => 'proekt-bn-3243-profilirovannyi-brus-345-kvm-v-nefteiuganske',
    'start_price' => '410000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_269/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_269/p269_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_269/p269_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 34.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3304", Профилированный брус, 17.24 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_270/p270_photo_1.webp',
    'slug' => 'proekt-bn-3304-profilirovannyi-brus-1724-kvm-v-nefteiuganske',
    'start_price' => '212776',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_270/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_270/p270_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_270/p270_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 17.24,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х4',
    'extension' => null,
],
        ];

        $seo_data = [
            [
            'seo_title' => 'Карина — Баня из профилированного бруса 120.5 кв.м. в [city|pp]',
            'seo_description' => 'Проект бани "Карина" площадью 120.5 кв.м. из профилированного бруса. Современное решение для комфортного отдыха в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3261 — Баня из профилированного бруса 48.4 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3261" площадью 48.4 кв.м. из профилированного бруса. Отличный выбор для загородного участка в [city|pp].',
            ],
            [
            'seo_title' => 'Киприя — Баня из профилированного бруса 136.2 кв.м. в [city|pp]',
            'seo_description' => 'Просторная баня "Киприя" площадью 136.2 кв.м. из профилированного бруса. Идеально для большой семьи в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3296 — Баня из профилированного бруса 14.26 кв.м. в [city|pp]',
            'seo_description' => 'Компактная баня "Проект БН-3296" площадью 14.26 кв.м. из профилированного бруса. Быстрое строительство в [city|pp].',
            ],
            [
            'seo_title' => 'Звездара — Баня из профилированного бруса 24.51 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Звездара" площадью 24.51 кв.м. из профилированного бруса. Уютное место для отдыха в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3305 — Баня из профилированного бруса 13.6 кв.м. в [city|pp]',
            'seo_description' => 'Маленькая баня "Проект БН-3305" площадью 13.6 кв.м. из профилированного бруса. Экономичное решение для дачи в [city|pp].',
            ],
            [
            'seo_title' => 'Цецилия — Баня из профилированного бруса 18 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Цецилия" площадью 18 кв.м. из профилированного бруса. Практичный проект для вашего участка в [city|pp].',
            ],
            [
            'seo_title' => 'Помпея — Баня из профилированного бруса 36.61 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Помпея" площадью 36.61 кв.м. из профилированного бруса. Комфорт и качество в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3243 — Баня из профилированного бруса 34.5 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3243" площадью 34.5 кв.м. из профилированного бруса. Отличный вариант для семьи в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3304 — Баня из профилированного бруса 17.24 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3304" площадью 17.24 кв.м. из профилированного бруса. Быстрое строительство и уют в [city|pp].',
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
