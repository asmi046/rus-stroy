<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PriceOfMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_of_materials')->insert([
            [ 'material' => 'Арболитовый блок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'Брус', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Брус строганый', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Двойной брус', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Газоблок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'Керамический блок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'Кирпич', 'type' => 'Коробка', 'price_per_meter' => 59000 ],
            [ 'material' => 'Клееный брус', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Лафет', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'ЛСТК', 'type' => 'Коробка', 'price_per_meter' => 30000 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Пеноблок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Коробка', 'price_per_meter' => 61000 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Коробка', 'price_per_meter' => 55000 ],
            [ 'material' => 'SIP-панели', 'type' => 'Коробка', 'price_per_meter' => 30000 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Брус', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Брус строганый', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Двойной брус', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Газоблок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Керамический блок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Кирпич', 'type' => 'Теплый контур', 'price_per_meter' => 63800 ],
            [ 'material' => 'Клееный брус', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Лафет', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'ЛСТК', 'type' => 'Теплый контур', 'price_per_meter' => 34500 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Пеноблок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Теплый контур', 'price_per_meter' => 64800 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Теплый контур', 'price_per_meter' => 59700 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'Брус', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Брус строганый', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Двойной брус', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Газоблок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'Керамический блок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'Кирпич', 'type' => 'Черновая отделка', 'price_per_meter' => 68000 ],
            [ 'material' => 'Клееный брус', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Лафет', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'ЛСТК', 'type' => 'Черновая отделка', 'price_per_meter' => 38700 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Пеноблок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Черновая отделка', 'price_per_meter' => 66000 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Черновая отделка', 'price_per_meter' => 64500 ],
            [ 'material' => 'SIP-панели', 'type' => 'Черновая отделка', 'price_per_meter' => 38700 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'Брус', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Брус строганый', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Двойной брус', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Газоблок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'Керамический блок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'Кирпич', 'type' => 'Под ключ', 'price_per_meter' => 89000 ],
            [ 'material' => 'Клееный брус', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Лафет', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'ЛСТК', 'type' => 'Под ключ', 'price_per_meter' => 57900 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Пеноблок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Под ключ', 'price_per_meter' => 86000 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Под ключ', 'price_per_meter' => 85000 ],
            [ 'material' => 'SIP-панели', 'type' => 'Под ключ', 'price_per_meter' => 57900 ],
        ]);
    }
}
