<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'price' => rand(1000000, 9999999),
            'property_description' => fake()->sentence(),
            // 'property_type',
            'total_surface' => rand(700, 10000),
            'surface_build' => rand(1000, 8000),
            'garden_surface' => rand(100, 1000),
            'payments'=>'',
            'arnona_for_2_months',
            'house_vaad'=>rand(0,1),
            'total_floor'=>rand(1,3),
            'sell_floor'=>'',
            'rooms_count',
            'access_for_disabled',
            'elevators',
            'renovated',
            'air_conditionner',
            'furnitures_included',
            'mammad',
            'bars',
            'unit',
            'personal_mazgan',
            'water_heater',
            'kosher_kitchen',
            'storage',
            'sell_entry_date',
            'rent_entry_date',
            'city',
            'balcony_count',
            'carpark_count',
            'ground_floor',
            'street',
            'street_number',
            'area',
            'matterport_link',
            'property_condition',
            'immediately',
            'flexible',
            'long_term',
            'is_mailable',
            'is_suggestible'
        ];
    }
}
