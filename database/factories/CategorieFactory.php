<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'slug' => $this->faker->unique()->slug,
            'status' => $this->faker->randomElement([0, 1]),
            'showhome' => $this->faker->randomElement(['Yes', 'No']), 
        ];
    }
}