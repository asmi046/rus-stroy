<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('materials/sip.webp', file_get_contents(public_path('tmp_data/materials/sip.webp')), 'public');
        Storage::disk('public')->put('materials/kirp.webp', file_get_contents(public_path('tmp_data/materials/kirp.webp')), 'public');
        Storage::disk('public')->put('materials/karkas.jpg', file_get_contents(public_path('tmp_data/materials/karkas.jpg')), 'public');
        Storage::disk('public')->put('materials/ocilindrovannoe_brevno.webp', file_get_contents(public_path('tmp_data/materials/ocilindrovannoe_brevno.webp')), 'public');
        Storage::disk('public')->put('materials/gazoblok.webp', file_get_contents(public_path('tmp_data/materials/gazoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/penoblok.webp', file_get_contents(public_path('tmp_data/materials/penoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/arbolit.webp', file_get_contents(public_path('tmp_data/materials/arbolit.jpg')), 'public');
        Storage::disk('public')->put('materials/keramzitoblok.webp', file_get_contents(public_path('tmp_data/materials/keramzitoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/keramoblok.webp', file_get_contents(public_path('tmp_data/materials/keramoblok.jpg')), 'public');
        Storage::disk('public')->put('materials/silikatnyj_blok.webp', file_get_contents(public_path('tmp_data/materials/silikatnyj_blok.jpg')), 'public');
        Storage::disk('public')->put('materials/brus.webp', file_get_contents(public_path('tmp_data/materials/brus.jpg')), 'public');
        Storage::disk('public')->put('materials/profil_brus.webp', file_get_contents(public_path('tmp_data/materials/profil_brus.jpg')), 'public');
        Storage::disk('public')->put('materials/kl_brus.webp', file_get_contents(public_path('tmp_data/materials/kl_brus.jpg')), 'public');

        $data = [
            [
                'card_title' => "Дома из СИП-панелей",
                'title' => "Строительство домов из СИП-панелей в [city|pp]",
                'material_name' => "СИП-панели",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/sip.webp',
                'slug' => Str::slug("Дома из СИП-панелей"),
                'order' => 1,
                'start_price' => 1084000.00,
                'description' => "СИП-панели — это современные строительные элементы, состоящие из двух слоев OSB и утеплителя, обеспечивающие высокую теплоизоляцию и быструю сборку.",
            ],
            [
                'card_title' => "Дома из пеноблоков",
                'title' => "Строительство домов из пеноблоков в [city|pp]",
                'material_name' => "Пеноблок",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/penoblok.webp',
                'slug' => Str::slug("Дома из пеноблоков"),
                'order' => 2,
                'start_price' => 1584000.00,
                'description' => "Пеноблок — легкий и недорогой материал, используемый для строительства энергоэффективных домов.",
            ],
            [
                'card_title' => "Каркасные дома",
                'title' => "Строительство домов из каркасных материалов в [city|pp]",
                'material_name' => "Каркасные дома",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/karkas.jpg',
                'slug' => Str::slug("Дома из каркасных материалов"),
                'order' => 3,
                'start_price' => 1584000.00,
                'description' => "Каркасные дома — это легкие и недорогие конструкции, которые обеспечивают высокую энергоэффективность.",
            ],
            [
                'card_title' => "Дома из кирпича",
                'title' => "Строительство домов из кирпича в [city|pp]",
                'material_name' => "Кирпич",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/kirp.webp',
                'slug' => Str::slug("Дома из кирпича"),
                'order' => 4,
                'start_price' => 2284000.00,
                'description' => "Кирпич — традиционный строительный материал, обеспечивающий прочность и долговечность зданий, а также отличную тепло- и звукоизоляцию.",
            ],
            [
                'card_title' => "Дома из газоблоков",
                'title' => "Строительство домов из газоблоков в [city|pp]",
                'material_name' => "Газобетон",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/gazoblok.webp',
                'slug' => Str::slug("Дома из газоблоков"),
                'order' => 5,
                'start_price' => 1584000.00,
                'description' => "Газоблок — популярный строительный материал для возведения стен и перекрытий, обладающий хорошей теплоизоляцией.",
            ],

            [
                'card_title' => "Дома из бруса",
                'title' => "Строительство домов из бруса в [city|pp]",
                'material_name' => "Брус",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/brus.webp',
                'slug' => Str::slug("Дома из бруса"),
                'order' => 6,
                'start_price' => 1924000.00,
                'description' => "Брус — натуральный материал, обеспечивающий экологичность и комфорт проживания в деревянном доме.",
            ],

            // [
            //     'card_title' => "Дома из ПЩС-блоков",
            //     'title' => "Строительство домов из СИП-панелей в [city|pp]",
            //     'material_name' => "ПЩС-блоки",
            //     'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
            //     'img' => 'materials/silikatnyj_blok.webp',
            //     'slug' => Str::slug("Дома из ПЩС-блоков"),
            //     'order' => 7,
            //     'start_price' => 3984000.00,
            //     'description' => "ПЩС-блоки — современные строительные материалы, обладающие высокой прочностью и отличной теплоизоляцией.",
            // ],

            // [
            //     'card_title' => "Дома из керамоблока",
            //     'title' => "Строительство домов из керамоблоков в [city|pp]",
            //     'material_name' => "Пеноблок",
            //     'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
            //     'img' => 'materials/keramoblok.webp',
            //     'slug' => Str::slug("Дома из керамоблока"),
            //     'order' => 8,
            //     'start_price' => 6280000.00,
            //     'description' => "Керамоблок — современный материал с высокой прочностью и отличной теплоизоляцией, подходит для строительства долговечных домов.",
            // ],
            [
                'card_title' => "Дома из профилированного бруса",
                'title' => "Строительство домов из профилированного бруса в [city|pp]",
                'material_name' => "Профилированный брус",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/profil_brus.webp',
                'slug' => Str::slug("Дома из профилированного бруса"),
                'order' => 9,
                'start_price' => 584000.00,
                'description' => "Профилированный брус — материал с точной геометрией, обеспечивает быстрое и качественное строительство деревянных домов.",
            ],

            [
                'card_title' => "Дома из клееного бруса",
                'title' => "Строительство домов из клееного бруса в [city|pp]",
                'material_name' => "Клеёный брус",
                'short_description' => "<ul><li>Строим домов под ключ.</li><li>Гарантия до 3 лет.</li><li>Сроки строительства от 2 месяцев.</li><li>Стоимость строительства от 45000 руб./м2</li></ul>",
                'img' => 'materials/kl_brus.webp',
                'slug' => Str::slug("Дома из клееного бруса"),
                'order' => 10,
                'start_price' => 6384000.00,
                'description' => null,
            ],

            [
                'card_title' => "Дома из бревна",
                'title' => "Строительство домов из оцилиндрованного бревна в [city|pp]",
                'material_name' => "Оцилиндрованное бревно",
                'short_description' => "Подборка проектов домов которые можно построить из оцилиндрованного бревна",
                'img' => 'materials/ocilindrovannoe_brevno.webp',
                'slug' => Str::slug("Дома из оцилиндрованного бревна"),
                'order' => 11,
                'start_price' => 1000000.00,
                'description' => "Оцилиндрованное бревно — натуральный материал, обеспечивающий экологичность и комфорт проживания в деревянном доме.",
            ],


        ];

        foreach ($data as $item) {
            DB::table("materials")->insert($item);

            DB::table("seo_data")->insert(
                [
                    'url' => 'materials/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['short_description'],
                ]
            );
        }
    }
}
