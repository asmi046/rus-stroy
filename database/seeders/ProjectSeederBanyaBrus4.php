<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanyaBrus4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

[
    'title' => '"Проект БН-3317", Профилированный брус, 26.88 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_283/p283_photo_1.webp',
    'slug' => 'proekt-bn-3317-profilirovannyi-brus-2688-kvm-v-nefteiuganske',
    'start_price' => '305000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_283/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_283/p283_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_283/p283_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_283/p283_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_283/p283_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_283/p283_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_283/p283_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 26.88,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Клелия ", Профилированный брус, 15.72 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_284/p284_photo_1.webp',
    'slug' => 'kleliia-profilirovannyi-brus-1572-kvm-v-nefteiuganske',
    'start_price' => '194016',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_284/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_284/p284_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_284/p284_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_284/p284_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_284/p284_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_284/p284_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.72,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3273", Профилированный брус, 9.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_285/p285_photo_1.webp',
    'slug' => 'proekt-bn-3273-profilirovannyi-brus-92-kvm-v-nefteiuganske',
    'start_price' => '113546',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_285/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_285/p285_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_285/p285_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 9.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Пушкин ", Профилированный брус, 53.23 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_286/p286_photo_1.webp',
    'slug' => 'puskin-profilirovannyi-brus-5323-kvm-v-nefteiuganske',
    'start_price' => '656965',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_286/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_286/p286_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_286/p286_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_286/p286_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_286/p286_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_286/p286_photo_5.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 53.23,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '8х10',
    'extension' => null,
],

[
    'title' => '"Проект БН-3253", Профилированный брус, 35.69 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_287/p287_photo_1.webp',
    'slug' => 'proekt-bn-3253-profilirovannyi-brus-3569-kvm-v-nefteiuganske',
    'start_price' => '410000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_287/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_287/p287_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_287/p287_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 35.69,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х8',
    'extension' => null,
],

[
    'title' => '"Проект БН-3241", Профилированный брус, 12.42 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_288/p288_photo_1.webp',
    'slug' => 'proekt-bn-3241-profilirovannyi-brus-1242-kvm-v-nefteiuganske',
    'start_price' => '153288',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_288/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_288/p288_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_288/p288_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 12.42,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3254", Профилированный брус, 50.88 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_289/p289_photo_1.webp',
    'slug' => 'proekt-bn-3254-profilirovannyi-brus-5088-kvm-v-nefteiuganske',
    'start_price' => '800000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_289/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_289/p289_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_289/p289_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 50.88,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х8',
    'extension' => null,
],

[
    'title' => '"Проект БН-3301", Профилированный брус, 13.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_291/p291_photo_1.webp',
    'slug' => 'proekt-bn-3301-profilirovannyi-brus-136-kvm-v-nefteiuganske',
    'start_price' => '160000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_291/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_291/p291_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_291/p291_photo_2.webp'],
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
    'title' => '"Проект БН-3298", Профилированный брус, 13.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_292/p292_photo_1.webp',
    'slug' => 'proekt-bn-3298-profilirovannyi-brus-136-kvm-v-nefteiuganske',
    'start_price' => '155000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_292/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_292/p292_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_292/p292_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_292/p292_photo_3.webp'],
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
    'title' => '"Проект БН-3293", Профилированный брус, 20.06 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_293/p293_photo_1.webp',
    'slug' => 'proekt-bn-3293-profilirovannyi-brus-2006-kvm-v-nefteiuganske',
    'start_price' => '220000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_293/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_293/p293_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_293/p293_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 20.06,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3269", Профилированный брус, 10.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_294/p294_photo_1.webp',
    'slug' => 'proekt-bn-3269-profilirovannyi-brus-102-kvm-v-nefteiuganske',
    'start_price' => '125888',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_294/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_294/p294_photo_1.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3250", Профилированный брус, 98.25 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_295/p295_photo_1.webp',
    'slug' => 'proekt-bn-3250-profilirovannyi-brus-9825-kvm-v-nefteiuganske',
    'start_price' => '1200000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_295/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_295/p295_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_295/p295_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_295/p295_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_295/p295_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 98.25,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х8',
    'extension' => null,
],

[
    'title' => '"Идуна ", Профилированный брус, 87.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_296/p296_photo_1.webp',
    'slug' => 'iduna-profilirovannyi-brus-875-kvm-v-nefteiuganske',
    'start_price' => '930000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_296/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_296/p296_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_296/p296_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_296/p296_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_296/p296_photo_4.webp'],
        ['img' => '/tmp_data/projects/pr_296/p296_photo_5.webp'],
        ['img' => '/tmp_data/projects/pr_296/p296_photo_6.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 87.5,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х11',
    'extension' => null,
],

[
    'title' => '"Проект БН-3272", Профилированный брус, 10.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_297/p297_photo_1.webp',
    'slug' => 'proekt-bn-3272-profilirovannyi-brus-102-kvm-v-nefteiuganske',
    'start_price' => '115000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_297/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_297/p297_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_297/p297_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 10.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х4',
    'extension' => null,
],

[
    'title' => '"Проект БН-3287", Профилированный брус, 15.3 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_298/p298_photo_1.webp',
    'slug' => 'proekt-bn-3287-profilirovannyi-brus-153-kvm-v-nefteiuganske',
    'start_price' => '165000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_298/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_298/p298_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_298/p298_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.3,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],

[
    'title' => '"Проект БН-3265", Профилированный брус, 7.65 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_299/p299_photo_1.webp',
    'slug' => 'proekt-bn-3265-profilirovannyi-brus-765-kvm-v-nefteiuganske',
    'start_price' => '91000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_299/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_299/p299_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_299/p299_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 7.65,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3278", Профилированный брус, 5.2 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_300/p300_photo_1.webp',
    'slug' => 'proekt-bn-3278-profilirovannyi-brus-52-kvm-v-nefteiuganske',
    'start_price' => '61000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_300/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_300/p300_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_300/p300_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_300/p300_photo_3.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 5.2,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х3',
    'extension' => null,
],

[
    'title' => '"Поликсена ", Профилированный брус, 34.5 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_301/p301_photo_1.webp',
    'slug' => 'poliksena-profilirovannyi-brus-345-kvm-v-nefteiuganske',
    'start_price' => '405000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_301/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_301/p301_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_301/p301_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_301/p301_photo_3.webp'],
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
    'plan_dimensions' => '6х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3319", Профилированный брус, 21.25 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_302/p302_photo_1.webp',
    'slug' => 'proekt-bn-3319-profilirovannyi-brus-2125-kvm-v-nefteiuganske',
    'start_price' => '230000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_302/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_302/p302_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_302/p302_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 21.25,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х6',
    'extension' => null,
],

[
    'title' => '"Юстиция", Профилированный брус, 70.6 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_303/p303_photo_1.webp',
    'slug' => 'iusticiia-profilirovannyi-brus-706-kvm-v-nefteiuganske',
    'start_price' => '820000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_303/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_303/p303_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_303/p303_photo_2.webp'],
        ['img' => '/tmp_data/projects/pr_303/p303_photo_3.webp'],
        ['img' => '/tmp_data/projects/pr_303/p303_photo_4.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 70.6,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '9х12',
    'extension' => null,
],

[
    'title' => '"Проект БН-3314", Профилированный брус, 19.27 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_304/p304_photo_1.webp',
    'slug' => 'proekt-bn-3314-profilirovannyi-brus-1927-kvm-v-nefteiuganske',
    'start_price' => '205000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_304/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_304/p304_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_304/p304_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 19.27,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '4х5',
    'extension' => null,
],

[
    'title' => '"Проект БН-3322", Профилированный брус, 5.1 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_305/p305_photo_1.webp',
    'slug' => 'proekt-bn-3322-profilirovannyi-brus-51-kvm-v-nefteiuganske',
    'start_price' => '62944',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_305/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_305/p305_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_305/p305_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 5.1,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '2х3',
    'extension' => null,
],

[
    'title' => '"Проект БН-3244", Профилированный брус, 42.84 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_306/p306_photo_1.webp',
    'slug' => 'proekt-bn-3244-profilirovannyi-brus-4284-kvm-v-nefteiuganske',
    'start_price' => '485000',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_306/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_306/p306_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_306/p306_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 42.84,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '7х7',
    'extension' => null,
],

[
    'title' => '"Проект БН-3288", Профилированный брус, 15.3 кв.м. в [city|pp]',
    'img' => '/tmp_data/projects/pr_307/p307_photo_1.webp',
    'slug' => 'proekt-bn-3288-profilirovannyi-brus-153-kvm-v-nefteiuganske',
    'start_price' => '188833',
    'description' => file_get_contents(public_path('/tmp_data/projects/pr_307/ds.html')),
    'gallery' => [
        ['img' => '/tmp_data/projects/pr_307/p307_photo_1.webp'],
        ['img' => '/tmp_data/projects/pr_307/p307_photo_2.webp'],
    ],
    'layout' => [],
    'type' => 'Баня',
    'floors' => 1,
    'total_area' => 15.3,
    'wall_material' => 'Профилированный брус',
    'foundation' => '',
    'ceiling_height' => 2.5,
    'flooring' => null,
    'mansard' => false,
    'plan_dimensions' => '3х6',
    'extension' => null,
],
        ];

        $seo_data = [
            [
            'seo_title' => 'Проект БН-3317 — Баня из профилированного бруса 26.88 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3317" площадью 26.88 кв.м. из профилированного бруса. Узнайте стоимость, фото, планировку и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Клелия — Баня из профилированного бруса 15.72 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Клелия" площадью 15.72 кв.м. из профилированного бруса. Фото, цена, планировка и подробное описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3273 — Баня из профилированного бруса 9.2 кв.м. в [city|pp]',
            'seo_description' => 'Компактная баня "Проект БН-3273" 9.2 кв.м. из профилированного бруса. Все детали, фото и стоимость в [city|pp].',
            ],
            [
            'seo_title' => 'Пушкин — Баня из профилированного бруса 53.23 кв.м. в [city|pp]',
            'seo_description' => 'Просторная баня "Пушкин" 53.23 кв.м. из профилированного бруса. Фото, цена и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3253 — Баня из профилированного бруса 35.69 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3253" площадью 35.69 кв.м. из профилированного бруса. Узнайте цену, фото и планировку в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3241 — Баня из профилированного бруса 12.42 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3241" 12.42 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3254 — Баня из профилированного бруса 50.88 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3254" 50.88 кв.м. из профилированного бруса. Фото, планировка и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3301 — Баня из профилированного бруса 13.6 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3301" 13.6 кв.м. из профилированного бруса. Фото, цена и подробности в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3298 — Баня из профилированного бруса 13.6 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3298" 13.6 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3293 — Баня из профилированного бруса 20.06 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3293" 20.06 кв.м. из профилированного бруса. Фото, цена и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3269 — Баня из профилированного бруса 10.2 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3269" 10.2 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3250 — Баня из профилированного бруса 98.25 кв.м. в [city|pp]',
            'seo_description' => 'Большая баня "Проект БН-3250" 98.25 кв.м. из профилированного бруса. Фото, цена и планировка в [city|pp].',
            ],
            [
            'seo_title' => 'Идуна — Баня из профилированного бруса 87.5 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Идуна" 87.5 кв.м. из профилированного бруса. Фото, стоимость и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3272 — Баня из профилированного бруса 10.2 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3272" 10.2 кв.м. из профилированного бруса. Фото, цена и подробности в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3287 — Баня из профилированного бруса 15.3 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3287" 15.3 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3265 — Баня из профилированного бруса 7.65 кв.м. в [city|pp]',
            'seo_description' => 'Компактная баня "Проект БН-3265" 7.65 кв.м. из профилированного бруса. Фото, цена и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3278 — Баня из профилированного бруса 5.2 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3278" 5.2 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Поликсена — Баня из профилированного бруса 34.5 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Поликсена" 34.5 кв.м. из профилированного бруса. Фото, цена и планировка в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3319 — Баня из профилированного бруса 21.25 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3319" 21.25 кв.м. из профилированного бруса. Фото, стоимость и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Юстиция — Баня из профилированного бруса 70.6 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Юстиция" 70.6 кв.м. из профилированного бруса. Фото, цена и подробное описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3314 — Баня из профилированного бруса 19.27 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3314" 19.27 кв.м. из профилированного бруса. Фото, стоимость и характеристики в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3322 — Баня из профилированного бруса 5.1 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3322" 5.1 кв.м. из профилированного бруса. Фото, цена и подробности в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3244 — Баня из профилированного бруса 42.84 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3244" 42.84 кв.м. из профилированного бруса. Фото, стоимость и описание в [city|pp].',
            ],
            [
            'seo_title' => 'Проект БН-3288 — Баня из профилированного бруса 15.3 кв.м. в [city|pp]',
            'seo_description' => 'Баня "Проект БН-3288" 15.3 кв.м. из профилированного бруса. Фото, цена и характеристики в [city|pp].',
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
