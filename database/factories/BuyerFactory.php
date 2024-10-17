<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'birth_date' => fake()->dateTimeBetween('-70 year', '-20 year'),
            'birth_place' => fake()->country(),
            'nationality' => fake()->country(),
            'sex' => fake()->randomElement(['Monsieur', 'Madame'])
        ];
    }
}
