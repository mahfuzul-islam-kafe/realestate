<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Condition;
use App\Models\Type;
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

    public $cities = [
        "Jerusalem",
        "Tel Aviv",
        "Haifa",
        "Rishon LeZion",
        "Petah Tikva",
        "Ashdod",
        "Netanya",
        "Beersheba",
        "Holon",
        "Bnei Brak",
        "Rehovot",
        "Bat Yam",
        "Ramat Gan",
        "Ashkelon",
        "Herzliya",
        "Kfar Saba",
        "Hadera",
        "Modiin",
        "Nazareth",
        "Lod",
        "Ramla",
        "Acre",
        "Eilat",
        "Tiberias"
    ];

    public $areas = [
        "Givat Shaul",
        "Neve Sha'anan",
        "Florentin",
        "Jaffa",
        "Nachlaot",
        "Talpiot",
        "Ramat Aviv",
        "Katamon",
        "Sheikh Jarrah",
        "Yad Eliyahu",
        "Pisgat Ze'ev",
        "Har Nof",
        "Bayit VeGan",
        "Neve Tzedek",
        "Gilo",
        "Ramat Eshkol",
        "Kiryat Shmona",
        "Mevasseret Zion",
        "Kfar Saba",
        "Ra'anana"
    ];


    public function definition(): array
    {

        $relations = [
            'type_id' => fake()->randomElement(Type::all()->pluck('id')->toArray()),
            'condition_id' => fake()->randomElement(Condition::all()->pluck('id')->toArray()),
            'agency_id' => fake()->randomElement(Agency::all()->pluck('id')->toArray())
        ];

        $attributes = [
            'total_surface' => rand(1000, 10000),
            'surface_build' => rand(1000, 8000),
            'garden_surface' => rand(100, 1000),
            'balcony_count' => rand(1, 4),
            'carpark_count' => rand(1, 3),
            'ground_floor' => rand(0, 1),
        ];

        $address = [
            'city' => fake()->randomElement($this->cities),
            'area' => fake()->randomElement($this->areas),
            'street' => fake()->streetAddress(),
            'street_number' => rand(100, 300),
        ];

        $features = [
            'house_vaad' => rand(0, 1),
            'mamad' => rand(0, 1),
            'bars' => rand(0, 1),
            'unit' => rand(0, 1),
            'personal_mazgan' => rand(0, 1),
            'water_heater' => rand(0, 1),
            'kosher_kitchen' => rand(0, 1),
            'storage' => rand(0, 1),
            'elevators' => rand(0, 1),
            'renovated' => rand(0, 1),
            'air_conditioner' => rand(0, 1),
            'furnitures_included' => rand(0, 1),
            'access_for_disabled' => rand(0, 1),
        ];

        $general = [
            'property_description' => fake()->sentence(),
            'listed_for' => fake()->randomElement(['sell', 'rent']),
            'matterport_link' => '',
            'total_floor' => rand(1, 3),
            'rooms_count' => rand(5, 20),
            'immediately' => rand(0, 1),
            'flexible' => rand(0, 1),
            'long_term' => rand(0, 1),
            'is_mailable' => rand(0, 1),
            'is_suggestible' => rand(0, 1)
        ];
        $payments = [
            'sell' => [
                'sell_floor' => rand(0, 1) ? ($general['total_floor'] > 1 ? rand(1, $general['total_floor']) : null) : null,
                'price' => rand(10000000, 999999999),
                'sell_entry_date' => now()->addMonth(rand(3, 10)),
            ],
            'rent' => [
                'sell_floor' => rand(0, 1) ? ($general['total_floor'] > 1 ? rand(1, $general['total_floor']) : null) : null,
                'price' => rand(1000, 9999),
                'payments' => rand(1, 4),
                'arnona_for_2_months' => rand(10000, 30000),
                'rent_entry_date' => now()->addMonth(rand(1, 5)),
            ]
        ][$general['listed_for']];




        $property =         array_merge($relations, $attributes, $address, $features, $general, $payments);


        return $property;
    }
}
