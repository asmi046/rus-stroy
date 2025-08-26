<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeederBanya extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => '"Проект БН-3570", оцилиндрованное бревно, 12.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_218/p218_photo_1.webp',
                'slug' => 'proekt-bn-3570-ocilindrovannoe-brevno-126-kvm',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_218/ds.html')),
                'start_price' => '960000',
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_218/p218_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_218/p218_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 12.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],
            [
                'title' => '"Проект БН-3571", оцилиндрованное бревно, 17.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_219/p219_photo_1.webp',
                'slug' => 'proekt-bn-3571-ocilindrovannoe-brevno-178-kvm',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_219/ds.html')),
                'start_price' => '963000',
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_219/p219_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_219/p219_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_219/p219_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 17.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3573", оцилиндрованное бревно, 17.21 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_221/p221_photo_1.webp',
                'slug' => 'proekt-bn-3573-ocilindrovannoe-brevno-1721-kvm',
                'start_price' => '976065',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_221/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_221/p221_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_221/p221_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 17.21,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3574", оцилиндрованное бревно, 7.65 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_222/p222_photo_1.webp',
                'slug' => 'proekt-bn-3574-ocilindrovannoe-brevno-765-kvm',
                'start_price' => '399000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_222/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_222/p222_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_222/p222_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 7.65,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '3х3',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3575", оцилиндрованное бревно, 13.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_223/p223_photo_1.webp',
                'slug' => 'proekt-bn-3575-ocilindrovannoe-brevno-136-kvm',
                'start_price' => '771324',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_223/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_223/p223_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_223/p223_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 13.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3576", оцилиндрованное бревно, 13.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_224/p224_photo_1.webp',
                'slug' => 'proekt-bn-3576-ocilindrovannoe-brevno-136-kvm',
                'start_price' => '811920',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_224/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_224/p224_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_224/p224_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 13.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3577", оцилиндрованное бревно, 20.2 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_225/p225_photo_1.webp',
                'slug' => 'proekt-bn-3577-ocilindrovannoe-brevno-202-kvm',
                'start_price' => '1140000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_225/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_225/p225_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_225/p225_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_225/p225_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 20.2,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3578", оцилиндрованное бревно, 21.03 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_226/p226_photo_1.webp',
                'slug' => 'proekt-bn-3578-ocilindrovannoe-brevno-2103-kvm',
                'start_price' => '1187500',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_226/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_226/p226_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_226/p226_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_226/p226_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 21.03,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3579", оцилиндрованное бревно, 18.77 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_227/p227_photo_1.webp',
                'slug' => 'proekt-bn-3579-ocilindrovannoe-brevno-1877-kvm',
                'start_price' => '1064541',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_227/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_227/p227_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_227/p227_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 18.77,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3580", оцилиндрованное бревно, 16.95 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_228/p228_photo_1.webp',
                'slug' => 'proekt-bn-3580-ocilindrovannoe-brevno-1695-kvm',
                'start_price' => '1010000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_228/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_228/p228_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_228/p228_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 16.95,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3581", оцилиндрованное бревно, 18.79 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_229/p229_photo_1.webp',
                'slug' => 'proekt-bn-3581-ocilindrovannoe-brevno-1879-kvm',
                'start_price' => '1065675',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_229/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_229/p229_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_229/p229_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_229/p229_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 18.79,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],
            [
                'title' => '"Проект БН-3582", оцилиндрованное бревно, 17 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_230/p230_photo_1.webp',
                'slug' => 'proekt-bn-3582-ocilindrovannoe-brevno-17-kvm',
                'start_price' => '964000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_230/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_230/p230_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_230/p230_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_230/p230_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 17,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3583", оцилиндрованное бревно, 16.66 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_231/p231_photo_1.webp',
                'slug' => 'proekt-bn-3583-ocilindrovannoe-brevno-1666-kvm',
                'start_price' => '944300',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_231/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_231/p231_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_231/p231_photo_2.webp'],
                ],
                'layout' => [ ['img' => '/tmp_data/projects/pr_231/p231_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 16.66,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3584", оцилиндрованное бревно, 18.17 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_232/p232_photo_1.webp',
                'slug' => 'proekt-bn-3584-ocilindrovannoe-brevno-1817-kvm',
                'start_price' => '1030512',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_232/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_232/p232_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_232/p232_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_232/p232_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 18.17,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3585", оцилиндрованное бревно, 10.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_233/p233_photo_1.webp',
                'slug' => 'proekt-bn-3585-ocilindrovannoe-brevno-108-kvm',
                'start_price' => '598500',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_233/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_233/p233_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_233/p233_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 10.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '3х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3586", оцилиндрованное бревно, 18.4 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_234/p234_photo_1.webp',
                'slug' => 'proekt-bn-3586-ocilindrovannoe-brevno-184-kvm',
                'start_price' => '1010000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_234/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_234/p234_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_234/p234_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 18.4,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х5',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3587", оцилиндрованное бревно, 21.5 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_235/p235_photo_1.webp',
                'slug' => 'proekt-bn-3587-ocilindrovannoe-brevno-215-kvm',
                'start_price' => '1219373',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_235/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_235/p235_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_235/p235_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_235/p235_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 21.5,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3588", оцилиндрованное бревно, 21.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_236/p236_photo_1.webp',
                'slug' => 'proekt-bn-3588-ocilindrovannoe-brevno-216-kvm',
                'start_price' => '1123850',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_236/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_236/p236_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_236/p236_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 21.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3589", оцилиндрованное бревно, 24.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_237/p237_photo_1.webp',
                'slug' => 'proekt-bn-3589-ocilindrovannoe-brevno-248-kvm',
                'start_price' => '1188450',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_237/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_237/p237_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_237/p237_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_237/p237_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 24.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3590", оцилиндрованное бревно, 24.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_238/p238_photo_1.webp',
                'slug' => 'proekt-bn-3590-ocilindrovannoe-brevno-246-kvm',
                'start_price' => '1154250',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_238/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_238/p238_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_238/p238_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 24.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3591", оцилиндрованное бревно, 24.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_239/p239_photo_1.webp',
                'slug' => 'proekt-bn-3591-ocilindrovannoe-brevno-248-kvm',
                'start_price' => '1244500',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_239/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_239/p239_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_239/p239_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 24.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3592", оцилиндрованное бревно, 24.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_240/p240_photo_1.webp',
                'slug' => 'proekt-bn-3592-ocilindrovannoe-brevno-248-kvm',
                'start_price' => '1406532',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_240/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_240/p240_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_240/p240_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 24.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3593", оцилиндрованное бревно, 23 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_241/p241_photo_1.webp',
                'slug' => 'proekt-bn-3593-ocilindrovannoe-brevno-23-kvm',
                'start_price' => '1225500',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_241/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_241/p241_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_241/p241_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 23,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3594", оцилиндрованное бревно, 21.5 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_242/p242_photo_1.webp',
                'slug' => 'proekt-bn-3594-ocilindrovannoe-brevno-215-kvm',
                'start_price' => '1283550',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_242/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_242/p242_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_242/p242_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 21.5,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3595", оцилиндрованное бревно, 19.5 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_243/p243_photo_1.webp',
                'slug' => 'proekt-bn-3595-ocilindrovannoe-brevno-195-kvm',
                'start_price' => '1105943',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_243/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_243/p243_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_243/p243_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 19.5,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х6',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3596", оцилиндрованное бревно, 10.8 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_244/p244_photo_1.webp',
                'slug' => 'proekt-bn-3596-ocilindrovannoe-brevno-108-kvm',
                'start_price' => '590140',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_244/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_244/p244_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_244/p244_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 10.8,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '3х4',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3597", оцилиндрованное бревно, 23.54 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_245/p245_photo_1.webp',
                'slug' => 'proekt-bn-3597-ocilindrovannoe-brevno-2354-kvm',
                'start_price' => '1335071',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_245/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_245/p245_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_245/p245_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_245/p245_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 23.54,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3598", оцилиндрованное бревно, 26 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_246/p246_photo_1.webp',
                'slug' => 'proekt-bn-3598-ocilindrovannoe-brevno-26-kvm',
                'start_price' => '1370350',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_246/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_246/p246_photo_1.webp'],
                    ['img' => '/tmp_data/projects/pr_246/p246_photo_2.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_246/p246_photo_3.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 26,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3599", оцилиндрованное бревно, 26 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_247/p247_photo_1.webp',
                'slug' => 'proekt-bn-3599-ocilindrovannoe-brevno-26-kvm',
                'start_price' => '1474590',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_247/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_247/p247_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_247/p247_photo_1.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 26,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3600", оцилиндрованное бревно, 24.9 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_248/p248_photo_1.webp',
                'slug' => 'proekt-bn-3600-ocilindrovannoe-brevno-249-kvm',
                'start_price' => '1295800',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_248/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_248/p248_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_248/p248_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 24.9,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3601", оцилиндрованное бревно, 25.54 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_249/p249_photo_1.webp',
                'slug' => 'proekt-bn-3601-ocilindrovannoe-brevno-2554-kvm',
                'start_price' => '1379400',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_249/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_249/p249_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_249/p249_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 25.54,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3602", оцилиндрованное бревно, 30.77 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_250/p250_photo_1.webp',
                'slug' => 'proekt-bn-3602-ocilindrovannoe-brevno-3077-kvm',
                'start_price' => '1666300',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_250/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_250/p250_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_250/p250_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 30.77,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3603", оцилиндрованное бревно, 28.6 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_251/p251_photo_1.webp',
                'slug' => 'proekt-bn-3603-ocilindrovannoe-brevno-286-kvm',
                'start_price' => '1510500',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_251/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_251/p251_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_251/p251_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 28.6,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],

            [
                'title' => '"Проект БН-3604", оцилиндрованное бревно, 21.64 кв.м. в [city|pp]',
                'img' => '/tmp_data/projects/pr_252/p252_photo_1.webp',
                'slug' => 'proekt-bn-3604-ocilindrovannoe-brevno-2164-kvm',
                'start_price' => '1159000',
                'description' => file_get_contents(public_path('/tmp_data/projects/pr_252/ds.html')),
                'gallery' => [
                    ['img' => '/tmp_data/projects/pr_252/p252_photo_1.webp'],
                ],
                'layout' => [['img' => '/tmp_data/projects/pr_252/p252_photo_2.webp']],
                'type' => 'Баня',
                'floors' => 1,
                'total_area' => 21.64,
                'wall_material' => 'Оцилиндрованное бревно',
                'foundation' => '',
                'ceiling_height' => 2.5,
                'flooring' => null,
                'mansard' => false,
                'plan_dimensions' => '4х7',
                'extension' => null,
            ],
        ];

        $seo_data = [
            [
                'seo_title' => 'Проект БН-3570 — баня из оцилиндрованного бревна 12.6 м² в [city|pp]',
                'seo_description' => 'Компактная баня 12.6 м² из оцилиндрованного бревна. Практичное решение для дачи и уютного отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3571 — баня из оцилиндрованного бревна 17.8 м² в [city|pp]',
                'seo_description' => 'Баня площадью 17.8 м² из прочного бревна. Надежный выбор для комфортного семейного отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3573 — баня из оцилиндрованного бревна 17.21 м² в [city|pp]',
                'seo_description' => 'Традиционная баня 17.21 м² из оцилиндрованного бревна. Отличный вариант для здоровья и релаксации в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3574 — баня из оцилиндрованного бревна 7.65 м² в [city|pp]',
                'seo_description' => 'Мини-баня 7.65 м² для небольшого участка. Уютное и доступное решение в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3575 — баня из оцилиндрованного бревна 8.79 м² в [city|pp]',
                'seo_description' => 'Небольшая баня 8.79 м² из натурального бревна. Отлично подходит для отдыха на даче в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3576 — баня из оцилиндрованного бревна 13.24 м² в [city|pp]',
                'seo_description' => 'Баня 13.24 м² из экологичного бревна. Практичное решение для отдыха и оздоровления в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3577 — баня из оцилиндрованного бревна 12.1 м² в [city|pp]',
                'seo_description' => 'Классическая баня 12.1 м² из бревна. Уют и тепло для всей семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3578 — баня из оцилиндрованного бревна 10.88 м² в [city|pp]',
                'seo_description' => 'Компактная баня 10.88 м². Экономичное и надежное решение для вашего участка в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3579 — баня из оцилиндрованного бревна 12.6 м² в [city|pp]',
                'seo_description' => 'Баня 12.6 м² из бревна. Простая и удобная постройка для отдыха и релаксации в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3580 — баня из оцилиндрованного бревна 14.8 м² в [city|pp]',
                'seo_description' => 'Баня 14.8 м² из прочного бревна. Практичный проект для загородного дома в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3581 — баня из оцилиндрованного бревна 13.5 м² в [city|pp]',
                'seo_description' => 'Баня 13.5 м² из оцилиндрованного бревна. Гармония традиций и комфорта в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3582 — баня из оцилиндрованного бревна 16.65 м² в [city|pp]',
                'seo_description' => 'Баня 16.65 м² для дружеских встреч и семейного отдыха. Надежное строение в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3583 — баня из оцилиндрованного бревна 14.6 м² в [city|pp]',
                'seo_description' => 'Функциональная баня 14.6 м². Уютный и практичный вариант для участка в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3584 — баня из оцилиндрованного бревна 14.3 м² в [city|pp]',
                'seo_description' => 'Баня 14.3 м² с оптимальной планировкой. Теплое и долговечное решение в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3585 — баня из оцилиндрованного бревна 20.16 м² в [city|pp]',
                'seo_description' => 'Просторная баня 20.16 м² для комфортного отдыха большой компании в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3586 — баня из оцилиндрованного бревна 16.76 м² в [city|pp]',
                'seo_description' => 'Баня 16.76 м² из оцилиндрованного бревна. Уютное место для отдыха на природе в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3587 — баня из оцилиндрованного бревна 18.12 м² в [city|pp]',
                'seo_description' => 'Баня 18.12 м² — сочетание традиций и современных решений. Подходит для участка в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3588 — баня из оцилиндрованного бревна 13.5 м² в [city|pp]',
                'seo_description' => 'Баня 13.5 м² из бревна. Удобный проект для дачи и загородного дома в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3589 — баня из оцилиндрованного бревна 10.89 м² в [city|pp]',
                'seo_description' => 'Компактная баня 10.89 м². Простое и доступное решение для отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3590 — баня из оцилиндрованного бревна 13.68 м² в [city|pp]',
                'seo_description' => 'Баня 13.68 м² из натурального бревна. Практичная постройка для семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3591 — баня из оцилиндрованного бревна 12.2 м² в [city|pp]',
                'seo_description' => 'Уютная баня 12.2 м². Традиционное качество и надежность в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3592 — баня из оцилиндрованного бревна 11.07 м² в [city|pp]',
                'seo_description' => 'Баня 11.07 м² — компактная и функциональная постройка для вашего участка в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3593 — баня из оцилиндрованного бревна 16.47 м² в [city|pp]',
                'seo_description' => 'Баня 16.47 м² для полноценного отдыха. Прочный и долговечный вариант в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3594 — баня из оцилиндрованного бревна 12.35 м² в [city|pp]',
                'seo_description' => 'Баня 12.35 м² из бревна. Уютное и надежное решение для дачи в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3595 — баня из оцилиндрованного бревна 12.1 м² в [city|pp]',
                'seo_description' => 'Небольшая баня 12.1 м². Практичный проект для комфортного отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3596 — баня из оцилиндрованного бревна 11.92 м² в [city|pp]',
                'seo_description' => 'Баня 11.92 м² из бревна. Отличный вариант для семейного отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3597 — баня из оцилиндрованного бревна 15.65 м² в [city|pp]',
                'seo_description' => 'Баня 15.65 м² для оздоровления и релаксации. Прочное строение из бревна в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3598 — баня из оцилиндрованного бревна 11.55 м² в [city|pp]',
                'seo_description' => 'Компактная баня 11.55 м² из натурального бревна. Удобное решение для дачи в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3599 — баня из оцилиндрованного бревна 10.94 м² в [city|pp]',
                'seo_description' => 'Баня 10.94 м². Доступный и надежный проект для участка в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3600 — баня из оцилиндрованного бревна 13.64 м² в [city|pp]',
                'seo_description' => 'Баня 13.64 м² из бревна. Уют и долговечность для вашего дома в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3601 — баня из оцилиндрованного бревна 13.65 м² в [city|pp]',
                'seo_description' => 'Функциональная баня 13.65 м² из бревна. Удобный проект для семьи в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3602 — баня из оцилиндрованного бревна 14.6 м² в [city|pp]',
                'seo_description' => 'Баня 14.6 м². Качественный и долговечный вариант для отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3603 — баня из оцилиндрованного бревна 14.6 м² в [city|pp]',
                'seo_description' => 'Баня 14.6 м². Качественный и долговечный вариант для отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3603 — баня из оцилиндрованного бревна 14.6 м² в [city|pp]',
                'seo_description' => 'Баня 14.6 м². Качественный и долговечный вариант для отдыха в [city|pp].',
            ],
            [
                'seo_title' => 'Проект БН-3604 — баня из оцилиндрованного бревна 12.36 м² в [city|pp]',
                'seo_description' => 'Баня 12.36 м² из бревна. Уютное и практичное решение для вашего участка в [city|pp].',
            ],
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
                    'seo_title' => $seo_data[$i]['seo_title'],
                    'seo_description' => $seo_data[$i]['seo_description'],
                    // 'seo_title' => $item['title'],
                    // 'seo_description' => $item['title'],
                ]
            );

            $i++;
        }


    }
}
