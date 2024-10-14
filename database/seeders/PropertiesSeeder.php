<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Fetch some agents (assuming you have at least 2 agents)
        $agents = User::where('role', 'agent')->take(2)->get();

        // Create sample properties
        foreach (range(1, 10) as $index) {
            Property::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(),
                'price' => $faker->randomFloat(2, 100000, 500000), // Price between 100,000 and 500,000
                'currency' => 'NIS', // Default currency
                'surface_area' => $faker->randomFloat(2, 50, 300), // Surface area between 50 and 300 m²
                'rooms' => $faker->numberBetween(1, 10), // Random rooms between 1 and 10
                'bedrooms' => $faker->numberBetween(1, 10), // Random bedrooms between 1 and 10
                'bathrooms' => $faker->numberBetween(1, 5), // Random bathrooms between 1 and 5
                'toilets' => $faker->numberBetween(1, 5), // Random toilets between 1 and 5
                'construction_year' => $faker->optional()->year(),
                'free_date' => $faker->optional()->date(),
                'type' => $faker->randomElement(['Apartment', 'Villa', 'Duplex', 'Triplex', 'Penthouse', 'Cottage/House']),
                'is_rented' => $faker->boolean(30), // 30% chance of being rented
                'is_sold' => $faker->boolean(10), // 10% chance of being sold
                'city' => $faker->city(),
                'region' => $faker->optional()->word(),
                'address' => $faker->address(),
                'is_exact_address' => $faker->boolean(70), // 70% chance of exact address
                'parking' => $faker->boolean(),
                'balcony' => $faker->boolean(),
                'terrace' => $faker->boolean(),
                'elevator' => $faker->boolean(),
                'accessible' => $faker->boolean(),
                'air_conditioner' => $faker->boolean(),
                'pool' => $faker->boolean(),
                'furnished' => $faker->boolean(),
                'exclusivity' => $faker->boolean(),
                'is_exceptional' => $faker->boolean(),
                'agent_id' => $agents->random()->id, // Random agent from the fetched list
            ]);
        }
    }
}
