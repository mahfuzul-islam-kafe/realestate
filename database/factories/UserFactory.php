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
            'company_name' => fake()->company(),
            'license_number' => fake()->randomNumber(8),
            'is_subscribed' => true,
            'role' => 'user',
            'profile_image' => '/assets/images/avatar.png',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),

        ];
    }

    public function sex($sex): static
    {
        return $this->state(fn(array $attributes) => [
            'name' => fake()->firstName(['Monsieur' => 'male', 'Madame' => 'female'][$sex]),
            'last_name' => fake()->lastName(['Monsieur' => 'male', 'Madame' => 'female'][$sex]),
        ]);
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

    public function active(): static
    {
        return $this->state(fn(array $attributes) => ['status' => 1]);
    }
    public function deactive(): static
    {
        return $this->state(fn(array $attributes) => ['status' => 0]);
    }
}
