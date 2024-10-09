<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'title' => 'Luxurious Apartment',
                'slug' => 'luxurious-apartment',
                'price' => 250000.00,
                'description' => 'A luxurious apartment in the city center with beautiful views.',
                'property_type' => 1, 
                'total_surface' => 120,
                'surface_build' => 110,
                'floor_count' => 2,
                'rooms_count' => 4,
                'bath_count' => 2,
                'balcony_count' => 1,
                'entry_date' => now()->addWeeks(3),
                'city' => 'New York',
                'entry_condition' => 1, 
                'property_condition' => 1, 
                'ad_type' => 1,
                'address' => '123 Main St, New York, NY 10001',
                'car_park_count' => 2,
                'map' => json_encode(['lat' => 40.712776, 'lng' => -74.005974]),
                'multimedia' => true,
                
            ],
            [
                'title' => 'Cozy House in the Suburbs',
                'slug' => 'cozy-house-suburbs',
                'price' => 180000.00,
                'description' => 'A cozy and charming house in a quiet suburban neighborhood.',
                'property_type' => 2,
                'total_surface' => 200,
                'surface_build' => 180,
                'floor_count' => 1,
                'rooms_count' => 3,
                'bath_count' => 2,
                'balcony_count' => 0,
                'entry_date' => now()->addWeeks(2),
                'city' => 'Los Angeles',
                'entry_condition' => 2, 
                'property_condition' => 2, 
                'ad_type' => 2, 
                'address' => '456 Suburb Lane, Los Angeles, CA 90001',
                'car_park_count' => 1,
                'map' => json_encode(['lat' => 34.052235, 'lng' => -118.243683]),
                'multimedia' => false,
                
            ],
        ]);
    }
}
