<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'slug'=>Str::slug($this->faker->unique->words(4,true)),
            'image' =>$this->faker->imageUrl(440, 500, 'cats', true, 'Faker'),
            'categorie_id' => $this->faker->randomElement([1,2,3,4]), 
            'subcategorie_id' =>  $this->faker->randomElement([1,2,3,4]),
            'brand_id' =>$this->faker->randomElement([1,2,3,4]),
        ];
    }
}