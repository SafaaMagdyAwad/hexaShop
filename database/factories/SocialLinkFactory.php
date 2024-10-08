<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialLink>
 */
class SocialLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'facebook'=>fake()->randomLetter()."www.facebook.com/user",
            'twitter'=>fake()->randomLetter()."www.twitter.com/user",
            'linkedin'=>fake()->randomLetter()."www.linkedin.com/user",
            'behance'=>fake()->randomLetter()."www.behance.com/user",
            'employee_id'=>fake()->numberBetween(1,10)
        ];
    }
}
