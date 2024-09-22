<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categorie_id' =>$this->faker->randomElement([1,2,3,4]) ,
            'subcategorie_id' =>$this->faker->randomElement([1,2,3,4]) ,
            
            'name'=>$this->faker->name,
            "slug"=>Str::slug($this->faker->unique->words(4,true))
            ,
            'status'=> $this->faker->boolean(80)
            
            
        ];
    }
}