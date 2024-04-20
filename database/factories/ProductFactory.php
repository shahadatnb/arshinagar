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
            'name' => fake()->name(),
            'price' => fake()->randomNumber(4),
            'description' => fake()->sentence(),
            'category_id' => fake()->numberBetween(1, 3),
            'photo'=> fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}