<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PriceOfMaterialSeeder::class,
            SeoDataSeeder::class,
            MenuSeeder::class,
            ParametrSeeder::class,
            QuestionSeeder::class,
            ReviewSeeder::class,
            PriceSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            ServiceKrovlyaSeeder::class,
            ServiceFasadSeeder::class,
            ServiceOtdelkaSeeder::class,
            ServiceZaborSeeder::class,
            ServiceNavesSeeder::class,
            ServiceModuleSeeder::class,
            ServiceBaniSeeder::class,
            ProjectSeeder::class,
            ProjectSeeder6x6::class,
            ProjectSeeder6x8::class,
            ProjectSeeder8x8::class,
            ProjectSeeder8x10::class,
            ProjectSeeder10x10::class,
            ProjectSeeder10x12::class,
            ProjectSeeder9x9::class,
            ProjectSeeder7x7::class,
            ProjectSeeder7x8::class,
            ProjectSeeder7x10::class,
            ProjectSeeder7x12::class,
            ProjectSeeder8x9::class,
            ProjectSeeder8x11::class,
            ProjectSeeder8x12::class,
            ProjectSeeder8x14::class,
            ProjectSeeder9x11::class,
            ProjectSeeder9x13::class,
            ProjectSeeder10x13::class,
            ProjectSeederBanya::class,
            ProjectSeederBanyaBrus::class,
            ProjectSeederBanyaBrus2::class,
            ProjectSeederBanyaBrus3::class,
            ProjectSeederBanyaBrus4::class,
            ProjectSeederBanyaBrus5::class,
            ProjectSeederBanyaBrus6::class,
            ProjectSeederDomKarkas::class,
            MaterialSeeder::class,
            WorkStepsSeeder::class,

            CitySeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            PageSeeder::class,

        ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
