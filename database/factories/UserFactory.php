<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'is_subscribed' => true,
            'role' => 'user',
            'profile_image' => '/assets/images/avatar.png',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'birth_date' => fake()->dateTimeBetween('-70 year', '-20 year'),
            'birth_place' => fake()->country(),
            'nationality' => fake()->country()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'admin'
        ]);
    }
    public function user(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'user'
        ]);
    }
    public function agent(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'agent'
        ]);
    }
}
