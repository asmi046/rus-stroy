<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('building/home.webp', file_get_contents(public_path('tmp_data/building/home.webp')), 'public');
        Storage::disk('public')->put('building/banya.webp', file_get_contents(public_path('tmp_data/building/banya.webp')), 'public');
        Storage::disk('public')->put('building/besedka.webp', file_get_contents(public_path('tmp_data/building/besedka.webp')), 'public');
        Storage::disk('public')->put('building/garazg.webp', file_get_contents(public_path('tmp_data/building/garazg.webp')), 'public');

        $data = [
            [
                'title' => 'Строительство домов в [city|pp]',
                'short_description' => 'Индивидуальные проекты и качественное исполнение',
                'img' => 'building/home.webp',
                'banner' => 'building/home.webp',
                'slug' => Str::slug('Строительство домов'),
                'description' => 'Мы предлагаем строительство домов в [city|pp] под ключ с учетом всех пожеланий клиента. Используем современные материалы и технологии, гарантируем надежность и долговечность построек.',
                'building_type' => 'Дом',
                'building_material' => 'СИП-панели',
                'start_price' => 1000000
            ],
            [
                'title' => 'Строительство Бань в [city|pp]',
                'short_description' => 'Бани для отдыха и здоровья',
                'img' => 'building/banya.webp',
                'banner' => 'building/banya.webp',
                'slug' => Str::slug('Строительство Бань'),
                'description' => 'Строим бани в [city|pp] с учетом всех современных стандартов. Комфортные и теплые помещения для отдыха всей семьи.',
                'building_type' => 'Баня',
                'start_price' => 300000
            ],
            [
                'title' => 'Строительство Беседок в [city|pp]',
                'short_description' => 'Уютные беседки для вашего участка',
                'img' => 'building/besedka.webp',
                'banner' => 'building/besedka.webp',
                'slug' => Str::slug('Строительство Беседок'),
                'description' => 'Беседки любой сложности и дизайна для вашего участка в [city|pp]. Качественные материалы и быстрые сроки строительства.',
                'building_type' => 'Беседка',
                'start_price' => 200000
            ],
            [
                'title' => 'Строительство Гаражей в [city|pp]',
                'short_description' => 'Надежные гаражи для вашего авто',
                'img' => 'building/garazg.webp',
                'banner' => 'building/garazg.webp',
                'slug' => Str::slug('Строительство Гаражей'),
                'description' => 'Строительство гаражей в [city|pp] с гарантией качества. Индивидуальные проекты, современные материалы, надежная защита для вашего автомобиля.',
                'building_type' => 'Гараж',
                'start_price' => 700000
            ],
        ];


        // Константы для SEO
        $seo_data = [
            [
            'seo_title' => 'Строительство домов в [city|pp] - Индивидуальные проекты и качественное исполнение | Проект, цена, фото',
            'seo_description' => 'Строим дома в [city|pp] под ключ. Современные материалы, надежность, индивидуальные проекты. Узнайте цену и посмотрите фото.',
            ],
            [
            'seo_title' => 'Строительство Бань в [city|pp] - Бани для отдыха и здоровья | Проект, цена, фото',
            'seo_description' => 'Строим бани в [city|pp] по современным стандартам. Комфорт, тепло, индивидуальные проекты. Узнайте цену и посмотрите фото.',
            ],
            [
            'seo_title' => 'Строительство Беседок в [city|pp] - Уютные беседки для вашего участка | Проект, цена, фото',
            'seo_description' => 'Беседки любой сложности для вашего участка в [city|pp]. Качественные материалы. Узнайте цену и посмотрите фото.',
            ],
            [
            'seo_title' => 'Строительство Гаражей в [city|pp] - Надежные гаражи для вашего авто | Проект, цена, фото',
            'seo_description' => 'Строим гаражи в [city|pp] с гарантией качества. Современные материалы, индивидуальные проекты. Узнайте цену и фото.',
            ],
        ];

        $i = 0;
        foreach ($data as $item) {
            DB::table("buildings")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'building/'.$item['slug'],
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],
                ]
            );
            $i++;
        }
    }
}
