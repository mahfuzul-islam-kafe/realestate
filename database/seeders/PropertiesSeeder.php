<?php

namespace Database\Seeders;

use App\Models\Image;
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

        $this->call(ConditionTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        Property::factory()->count(1000)->has(Image::factory()->featured()->count(5))->has(Image::factory()->count(10))->create();
    }
}
