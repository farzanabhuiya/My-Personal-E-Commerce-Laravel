<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategorie>
 */
class SubCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name, 
            'categorie_id'=>$this->faker->randomElement([1,2,3,4]),
            'slug' => Str::slug($this->faker->unique()->words(3, true)), 
            'showhome' => $this->faker->randomElement(['Yes', 'No']),
            'status' => $this->faker->boolean(80)
        ];
    }
}