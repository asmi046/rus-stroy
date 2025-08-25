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
            [ 'material' => 'Арболитовый блок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'Брус', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Брус строганый', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Двойной брус', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Газоблок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'Керамический блок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'Кирпич', 'type' => 'Коробка', 'price_per_meter' => 50150 ],
            [ 'material' => 'Клееный брус', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Лафет', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'ЛСТК', 'type' => 'Коробка', 'price_per_meter' => 25500 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Пеноблок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Коробка', 'price_per_meter' => 51850 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Коробка', 'price_per_meter' => 46750 ],
            [ 'material' => 'SIP-панели', 'type' => 'Коробка', 'price_per_meter' => 25500 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Брус', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Брус строганый', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Двойной брус', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Газоблок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Керамический блок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Кирпич', 'type' => 'Теплый контур', 'price_per_meter' => 54230 ],
            [ 'material' => 'Клееный брус', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Лафет', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'ЛСТК', 'type' => 'Теплый контур', 'price_per_meter' => 29325 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Пеноблок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Теплый контур', 'price_per_meter' => 55080 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Теплый контур', 'price_per_meter' => 50745 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'Брус', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Брус строганый', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Двойной брус', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Газоблок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'Керамический блок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'Кирпич', 'type' => 'Черновая отделка', 'price_per_meter' => 57800 ],
            [ 'material' => 'Клееный брус', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Лафет', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'ЛСТК', 'type' => 'Черновая отделка', 'price_per_meter' => 32900 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Пеноблок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Черновая отделка', 'price_per_meter' => 56100 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Черновая отделка', 'price_per_meter' => 54825 ],
            [ 'material' => 'SIP-панели', 'type' => 'Черновая отделка', 'price_per_meter' => 32900 ],
            [ 'material' => 'Арболитовый блок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'Керамзитоблок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'Брус', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Брус строганый', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Двойной брус', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Газоблок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'Керамический блок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'Кирпич', 'type' => 'Под ключ', 'price_per_meter' => 75650 ],
            [ 'material' => 'Клееный брус', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Лафет', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'ЛСТК', 'type' => 'Под ключ', 'price_per_meter' => 49215 ],
            [ 'material' => 'Оцилиндрованное бревно', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Пеноблок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'Профилированный брус', 'type' => 'Под ключ', 'price_per_meter' => 73100 ],
            [ 'material' => 'Силикатный блок', 'type' => 'Под ключ', 'price_per_meter' => 72250 ],
            [ 'material' => 'SIP-панели', 'type' => 'Под ключ', 'price_per_meter' => 49215 ],
        ]);
    }
}
