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
        $image = ['kid-01.jpg','kid-02.jpg','kid-03.jpg','men-01.jpg','men-02.jpg','men-03.jpg','women-01.jpg','women-02.jpg','women-03.jpg'];
        return [
            'title' => fake()->title(),
            'price' => fake()->numberBetween(200, 4000),
            'image' => fake()->randomElement($image),
            'star' => fake()->numberBetween(1, 10),
            'isPublished' => fake()->boolean(),
            'category' => fake()->randomElement(['Men', 'Wemen', 'Kid', 'Accessories']),
        ];
    }
}
