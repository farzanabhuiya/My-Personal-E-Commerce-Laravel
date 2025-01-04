<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            

            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraphs(3, true),
            'short_description' => $this->faker->sentence,
            'shipping_returns' => $this->faker->sentence,
            'related_products' => $this->faker->sentence,
            // 'image' => $this->faker->imageUrl(640, 480, 'products'),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'compare_price' => $this->faker->optional()->randomFloat(2, 10, 1000),
            'categorie_id' =>$this->faker->randomElement([1,2,3,4]),
            'subcategorie_id' => $this->faker->randomElement([1,2,3,4]),
            'brand_id' => $this->faker->randomElement([1,2,3,4]),
            'item_id' => $this->faker->randomElement([1,2,3,4]),
            'is_featured' => $this->faker->randomElement(['Yes', 'No']),
            'sku' => $this->faker->unique()->numerify('SKU-####'),
            'barcode' => $this->faker->optional()->ean13,
            'track_qty' => $this->faker->randomElement(['Yes', 'No']),
            'qty' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->boolean(80),
            'discount_amount' => $this->faker->optional()->randomFloat(2, 1, 100),
            'discount_type' => $this->faker->randomElement(['percent', 'fixed']),
            'offer_amount' => $this->faker->optional()->randomFloat(2, 1, 100),
            'offer_type' => $this->faker->randomElement(['percent', 'fixed']),
            'productsize_id' => $this->faker->randomElement([1,2,3,4]),
            'productcolour_id' => $this->faker->randomElement([1,2,3,4]),
            'image' => $this->faker->image(storage_path('ProductImage'), 50, 50)











        ];
    }
}
