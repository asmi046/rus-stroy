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
            ProjectSeeder::class,
            ProjectSeeder6x6::class,
            ProjectSeeder6x8::class,
            ProjectSeeder8x8::class,
            ProjectSeeder8x10::class,
            ProjectSeeder10x10::class,
            ProjectSeeder10x12::class,
            ProjectSeeder9x9::class,
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
