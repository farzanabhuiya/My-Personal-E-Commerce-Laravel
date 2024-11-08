<?php

namespace Database\Seeders;

use App\Models\Categorie;
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
        // User::factory(10)->create();

        $this->call([
           
            RoleSeeder::class,
            UserSeeder::class,
            DistrictSeeder::class,
            CategorieSeeder::class,
            SubCategorieSeeder::class,
            BrandSeeder::class,
            ItemSeeder::class,
            ProductColourSeeder::class,
            ProductSizeSeeder::class,
            ProductSeeder::class,
            
        

        ]);
    }
}