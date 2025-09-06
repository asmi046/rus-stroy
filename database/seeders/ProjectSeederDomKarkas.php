<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederDomKarkas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
[
    'title' => 'Паритет, каркасные дома, 101.46 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_355/p355_photo_1.webp',
    'slug' => 'paritet-karkasnye-doma-10146-kvm-v-surgute',
    'start_price' => '1870000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_355/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_355/p355_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_355/p355_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 101.46,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х9',
    'extension' => 'С террасой',
],

[
    'title' => 'Ювяскюля , каркасные дома, 93.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_356/p356_photo_1.webp',
    'slug' => 'iuviaskiulia-karkasnye-doma-936-kvm-v-surgute',
    'start_price' => '1720000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_356/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_356/p356_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_356/p356_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_356/p356_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_356/p356_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_356/p356_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_356/p356_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 93.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Кава, каркасные дома, 106.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_357/p357_photo_1.webp',
    'slug' => 'kava-karkasnye-doma-1067-kvm-v-surgute',
    'start_price' => '7469000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_357/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_357/p357_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_357/p357_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_357/p357_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_357/p357_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_357/p357_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_357/p357_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 1,
    'total_area' => 106.7,
    'wall_material' => 'Каркасные дома',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х12',
    'extension' => 'С террасой',
],

[
    'title' => 'Шеплия , каркасные дома, 170.94 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_358/p358_photo_1.webp',
    'slug' => 'sepliia-karkasnye-doma-17094-kvm-v-surgute',
    'start_price' => '2900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_358/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_358/p358_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_358/p358_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 170.94,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х14',
    'extension' => 'С террасой',
],

[
    'title' => 'Тамариски, каркасные дома, 49.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_359/p359_photo_1.webp',
    'slug' => 'tamariski-karkasnye-doma-495-kvm-v-surgute',
    'start_price' => '1020000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_359/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_359/p359_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_359/p359_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 49.5,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Норманния , каркасные дома, 105.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_360/p360_photo_1.webp',
    'slug' => 'normanniia-karkasnye-doma-1052-kvm-v-surgute',
    'start_price' => '7679600',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_360/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_360/p360_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_360/p360_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_360/p360_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_360/p360_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_360/p360_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_360/p360_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 1,
    'total_area' => 105.2,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '10х12',
    'extension' => 'С баней',
],

[
    'title' => 'Парротия, каркасные дома, 106.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_361/p361_photo_1.webp',
    'slug' => 'parrotiia-karkasnye-doma-1067-kvm-v-surgute',
    'start_price' => '1900000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_361/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_361/p361_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_361/p361_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 106.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х9',
    'extension' => 'С террасой',
],

[
    'title' => 'Приам , каркасные дома, 109.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_362/p362_photo_1.webp',
    'slug' => 'priam-karkasnye-doma-1094-kvm-v-surgute',
    'start_price' => '2000000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_362/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_362/p362_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_362/p362_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 109.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х12',
    'extension' => 'С верандой',
],

[
    'title' => ' Юнона , каркасные дома, 236.71 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_363/p363_photo_1.webp',
    'slug' => 'iunona-karkasnye-doma-23671-kvm-v-surgute',
    'start_price' => '15622860',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_363/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_363/p363_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_363/p363_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_363/p363_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_363/p363_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_363/p363_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_363/p363_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 236.71,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '12х14',
    'extension' => 'С верандой',
],

[
    'title' => 'Шайзу, каркасные дома, 68.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_364/p364_photo_1.webp',
    'slug' => 'saizu-karkasnye-doma-682-kvm-v-surgute',
    'start_price' => '1300000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_364/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_364/p364_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_364/p364_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 68.2,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х11',
    'extension' => 'С эркером',
],


[
    'title' => 'Тейя , каркасные дома, 211.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_366/p366_photo_1.webp',
    'slug' => 'teiia-karkasnye-doma-2114-kvm-v-surgute',
    'start_price' => '13952400',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_366/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_366/p366_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_366/p366_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 211.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '10х10',
    'extension' => 'С террасой',
],

[
    'title' => 'Йозефа , каркасные дома, 231 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_367/p367_photo_1.webp',
    'slug' => 'iozefa-karkasnye-doma-231-kvm-v-surgute',
    'start_price' => '3800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_367/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_367/p367_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_367/p367_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 231,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '11х14',
    'extension' => 'С балконом',
],

[
    'title' => 'Вера , каркасные дома, 142.7 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_368/p368_photo_1.webp',
    'slug' => 'vera-karkasnye-doma-1427-kvm-v-surgute',
    'start_price' => '2400000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_368/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_368/p368_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_368/p368_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 142.7,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х14',
    'extension' => 'С балконом',
],

[
    'title' => 'Грация, каркасные дома, 84.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_369/p369_photo_1.webp',
    'slug' => 'graciia-karkasnye-doma-845-kvm-v-surgute',
    'start_price' => '1550000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_369/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_369/p369_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_369/p369_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 84.5,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '6х8',
    'extension' => 'С террасой',
],

[
    'title' => 'Мирзам, каркасные дома, 175.52 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_370/p370_photo_1.webp',
    'slug' => 'mirzam-karkasnye-doma-17552-kvm-v-surgute',
    'start_price' => '3050000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_370/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_370/p370_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_370/p370_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 175.52,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х14',
    'extension' => 'С террасой',
],

[
    'title' => 'Психея , каркасные дома, 335.4 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_371/p371_photo_1.webp',
    'slug' => 'psixeia-karkasnye-doma-3354-kvm-v-surgute',
    'start_price' => '5300000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_371/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_371/p371_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_7.webp'],
        ['img' => '/tmp_data/projects/pr_371/p371_photo_8.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 335.4,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '10х12',
    'extension' => 'С баней',
],

[
    'title' => 'Белопольския , каркасные дома, 139.78 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_372/p372_photo_1.webp',
    'slug' => 'belopolskiia-karkasnye-doma-13978-kvm-v-surgute',
    'start_price' => '2350000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_372/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_372/p372_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_372/p372_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 139.78,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х9',
    'extension' => 'С террасой',
],

[
    'title' => 'Мендельсон, каркасные дома, 147.86 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_373/p373_photo_1.webp',
    'slug' => 'mendelson-karkasnye-doma-14786-kvm-v-surgute',
    'start_price' => '2550000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_373/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_373/p373_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_373/p373_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 147.86,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х10',
    'extension' => 'С террасой',
],

[
    'title' => 'Каролина, каркасные дома, 197.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_375/p375_photo_1.webp',
    'slug' => 'karolina-karkasnye-doma-1976-kvm-v-surgute',
    'start_price' => '3100000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_375/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_375/p375_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_375/p375_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 197.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '12х13',
    'extension' => 'С террасой',
],

[
    'title' => 'Инанда, каркасные дома, 163 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_376/p376_photo_1.webp',
    'slug' => 'inanda-karkasnye-doma-163-kvm-v-surgute',
    'start_price' => '2850000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_376/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_376/p376_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_6.webp'],
        ['img' => '/tmp_data/projects/pr_376/p376_photo_7.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 2,
    'total_area' => 163,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х12',
    'extension' => 'С верандой',
],

[
    'title' => 'Лансере, каркасные дома, 86.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_377/p377_photo_1.webp',
    'slug' => 'lansere-karkasnye-doma-866-kvm-v-surgute',
    'start_price' => '1580000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_377/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_377/p377_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_377/p377_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_377/p377_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_377/p377_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_377/p377_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_377/p377_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Дом',
    'floors' => 1,
    'total_area' => 86.6,
    'wall_material' => 'Каркасные дома',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х15',
    'extension' => 'С террасой',
],


        ];

        $seo_data = [
            [
                'seo_title' => 'Паритет, каркасные дома, 101.46 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Паритет, каркасные дома, 101.46 кв.м. в Сургуте. Каркасный дом площадью 101.46 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Ювяскюля , каркасные дома, 93.6 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Ювяскюля , каркасные дома, 93.6 кв.м. в Сургуте. Каркасный дом площадью 93.6 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Кава , каркасные дома, 106.7 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Кава , каркасные дома, 106.7 кв.м. в Сургуте. Каркасный дом площадью 106.7 м², 1 этаж, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Шеплия , каркасные дома, 170.94 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Шеплия , каркасные дома, 170.94 кв.м. в Сургуте. Каркасный дом площадью 170.94 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Тамариски, каркасные дома, 49.5 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Тамариски, каркасные дома, 49.5 кв.м. в Сургуте. Каркасный дом площадью 49.5 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Норманния , каркасные дома, 105.2 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Норманния , каркасные дома, 105.2 кв.м. в Сургуте. Каркасный дом площадью 105.2 м², 1 этаж, с баней. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Парротия, каркасные дома, 106.7 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Парротия, каркасные дома, 106.7 кв.м. в Сургуте. Каркасный дом площадью 106.7 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Парротия, каркасные дома, 106.7 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Парротия, каркасные дома, 106.7 кв.м. в Сургуте. Каркасный дом площадью 106.7 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Приам , каркасные дома, 109.4 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Приам , каркасные дома, 109.4 кв.м. в Сургуте. Каркасный дом площадью 109.4 м², 2 этажа, с верандой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Юнона , каркасные дома, 236.71 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Юнона , каркасные дома, 236.71 кв.м. в Сургуте. Каркасный дом площадью 236.71 м², 2 этажа, с верандой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Шайзу, каркасные дома, 68.2 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Шайзу, каркасные дома, 68.2 кв.м. в Сургуте. Каркасный дом площадью 68.2 м², 2 этажа, с эркером. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Паритет, каркасные дома, 101.46 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Паритет, каркасные дома, 101.46 кв.м. в Сургуте. Каркасный дом площадью 101.46 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Тейя , каркасные дома, 211.4 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Тейя , каркасные дома, 211.4 кв.м. в Сургуте. Каркасный дом площадью 211.4 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Йозефа , каркасные дома, 231 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Йозефа , каркасные дома, 231 кв.м. в Сургуте. Каркасный дом площадью 231 м², 2 этажа, с балконом. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Вера , каркасные дома, 142.7 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Вера , каркасные дома, 142.7 кв.м. в Сургуте. Каркасный дом площадью 142.7 м², 2 этажа, с балконом. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Грация, каркасные дома, 84.5 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Грация, каркасные дома, 84.5 кв.м. в Сургуте. Каркасный дом площадью 84.5 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Мирзам, каркасные дома, 175.52 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Мирзам, каркасные дома, 175.52 кв.м. в Сургуте. Каркасный дом площадью 175.52 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Психея , каркасные дома, 335.4 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Психея , каркасные дома, 335.4 кв.м. в Сургуте. Каркасный дом площадью 335.4 м², 2 этажа, с баней. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Белопольския , каркасные дома, 139.78 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Белопольския , каркасные дома, 139.78 кв.м. в Сургуте. Каркасный дом площадью 139.78 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Мендельсон, каркасные дома, 147.86 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Мендельсон, каркасные дома, 147.86 кв.м. в Сургуте. Каркасный дом площадью 147.86 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Каролина, каркасные дома, 197.6 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Каролина, каркасные дома, 197.6 кв.м. в Сургуте. Каркасный дом площадью 197.6 м², 2 этажа, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Инанда, каркасные дома, 163 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Инанда, каркасные дома, 163 кв.м. в Сургуте. Каркасный дом площадью 163 м², 2 этажа, с верандой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
            ],
            [
                'seo_title' => 'Лансере, каркасные дома, 86.6 кв.м. в Сургуте — проекты и цены, фото, планировки',
                'seo_description' => 'Проект Лансере, каркасные дома, 86.6 кв.м. в Сургуте. Каркасный дом площадью 86.6 м², 1 этаж, с террасой. Узнайте стоимость, посмотрите фото и планировки на сайте.',
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
