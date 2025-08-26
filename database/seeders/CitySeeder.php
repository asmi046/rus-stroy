<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            [
                'name' => "Сургут",
                'slug' => "surgut",
                'is_default' => true,
                'order' => 1,
                'address' => "628414, г. Сургут, улица Маяковского, 57, ТЦ Гуливер",
                'phone' => "+7 (3462) 59-71-71",
                'rp' => "Сургута",
                'pp' => "Сургуте",
                'dp' => "Сургуту",
            ],
            [
                'name' => "Нижневартовск",
                'slug' => "nizhnevartovsk",
                'is_default' => false,
                'order' => 2,
                'address' => "628611, г. Нижневартовск, улица Мира, 4",
                'phone' => "+7 904 450 32 07",
                'rp' => "Нижневартовска",
                'pp' => "Нижневартовске",
                'dp' => "Нижневартовску",
            ],
            [
                'name' => "Когалым",
                'slug' => "kogalym",
                'is_default' => false,
                'order' => 3,
                'address' => "628484, г. Когалым, улица Ленинградская, 2",
                'phone' => "+7 904 450 32 07",
                'rp' => "Когалыма",
                'pp' => "Когалыме",
                'dp' => "Когалыму",
            ],
            [
                'name' => "Нефтеюганск",
                'slug' => "nefteyugansk",
                'is_default' => false,
                'order' => 4,
                'address' => "628301, г. Нефтеюганск, улица Парковая, 5",
                'phone' => "+7 904 450 32 07",
                'rp' => "Нефтеюганска",
                'pp' => "Нефтеюганске",
                'dp' => "Нефтеюганску",
            ],

            [
                'name' => "Пыть-Ях",
                'slug' => "ptyah",
                'is_default' => false,
                'order' => 5,
                'address' => "628383, г. Пыть-Ях, улица Нефтяников, 20",
                'phone' => "+7 904 450 32 07",
                'rp' => "Пыть-Яха",
                'pp' => "Пыть-Яхе",
                'dp' => "Пыть-Яху",
            ],

            [
                'name' => "Пойковский",
                'slug' =>  "poikovskiy",
                'is_default' => false,
                'order' => 6,
                'address' => "628331, г. Пойковский, улица Центральная, 9а",
                'phone' => "+7 904 450 32 07",
                'rp' => "Пойковского",
                'pp' => "Пойковском",
                'dp' => "Пойковскому",

            ],
            [
                'name' => "Мегион",
                'slug' => Str::slug("Мегион"),
                'is_default' => false,
                'order' => 7,
                'address' => "628680, г. Мегион, улица Садовая, 24",
                'phone' => "+7 904 450 32 07",
                'rp' => "Мегиона",
                'pp' => "Мегионе",
                'dp' => "Мегиону",

            ],
            [
                'name' => "Ноябрьск",
                'slug' =>  Str::slug("Ноябрьск"),
                'is_default' => false,
                'order' => 8,
                'address' => "629807, г. Ноябрьск, улица Ленина, 30",
                'phone' => "+7 904 450 32 07",
                'rp' => "Ноябрьска",
                'pp' => "Ноябрьске",
                'dp' => "Ноябрьску",

            ],
            [
                'name' => "Новый уренгой",
                'slug' =>  Str::slug("Новый уренгой"),
                'is_default' => false,
                'order' => 9,
                'address' => "629309, г. Новый Уренгой, улица Дружбы Народов, 1/2",
                'phone' => "+7 904 450 32 07",
                'rp' => "Нового уренгоя",
                'pp' => "Новом уренге",
                'dp' => "Новому уренгою",

            ],
            [
                'name' => "Губкинский",
                'slug' =>  Str::slug("Губкинский"),
                'is_default' => false,
                'order' => 10,
                'address' => "629830, г. Губкинский, улица Строителей, 25",
                'phone' => "+7 904 450 32 07",
                'rp' => "Губкинском",
                'pp' => "Губкинске",
                'dp' => "Губкинскому",

            ],
            [
                'name' => "Муравленко",
                'slug' =>  Str::slug("Муравленко"),
                'is_default' => false,
                'order' => 11,
                'address' => "629602, г. Муравленко, улица Губкина, 32",
                'phone' => "+7 904 450 32 07",
                'rp' => "Муравленко",
                'pp' => "Муравленко",
                'dp' => "Муравленко",

            ],
            [
                'name' => "Тарко-сале",
                'slug' =>  Str::slug("Тарко-сале"),
                'is_default' => false,
                'order' => 12,
                'address' => "629851, г. Тарко-Сале, улица Юбилейная, 17",
                'phone' => "+7 904 450 32 07",
                'rp' => "Тарко-сале",
                'pp' => "Тарко-сале",
                'dp' => "Тарко-сале",

            ],

        ];

        DB::table("cities")->insert($data);
    }
}
