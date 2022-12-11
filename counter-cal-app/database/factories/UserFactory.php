<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Str::random(12),
            'remember_token' => Str::random(10),
            'height' => $this->faker->numberBetween(50, 250),
            'age' => $this->faker->numberBetween(13, 100),
            'activity' => $this->faker->randomElement(['min', 'light', 'middle', 'high']),
            'mission' => $this->faker->randomElement(['0', '1', '2']),
        ];
    }
}
