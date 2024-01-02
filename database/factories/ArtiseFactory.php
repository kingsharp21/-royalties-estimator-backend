<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artise>
 */
class ArtiseFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'gender' => fake()->randomElement(['male', 'female','other']),
            'dob' => fake()->date(),
            'country' => fake()->country(),
            'contact_number' => fake()->numberBetween(10000000000,90000000000),
        ];
    }
}
