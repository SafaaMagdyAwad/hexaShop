<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = ['team-member-01.jpg', 'team-member-02.jpg', 'team-member-03.jpg'];
        return [
            'name' => fake()->name(),
            'image' => fake()->randomElement($images),
            'isPublished' => fake()->boolean(),
            'job_data_id' => fake()->numberBetween(1, 10),
        ];
    }
}
