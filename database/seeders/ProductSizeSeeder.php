<?php

namespace Database\Seeders;

use App\Models\Productsize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productsize::factory(30)->create();
    }
}
