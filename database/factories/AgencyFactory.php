<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agency>
 */
class AgencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => '/assets/images/agency_demo.svg',
            'agency_name' => fake()->company(),
            'license_number' => rand(1000000, 9999999),
            'office_address' => fake()->address(),
            'contact_number' => fake()->phoneNumber(),
            'website' => fake()->domainName(),
            'schedule' => [
                [['Sunday', 'Monday'], ['9:30', '19:00']],
                [['Tuesday', 'Wednesday'], ['9:30', '19:00']],
                [['Thursday', 'Friday'], ['9:30', '19:00']],
            ],
            'profile_description' => fake()->paragraph(),
            'is_verified' => true
        ];
    }
}
