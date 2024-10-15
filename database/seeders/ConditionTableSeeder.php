<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_conditions')->insert([
            ['display_name' => 'Good', 'slug' => 'good'],
            ['display_name' => 'Needs Renovation', 'slug' => 'needs-renovation'],
            ['display_name' => 'New', 'slug' => 'new'],
            ['display_name' => 'Under Construction', 'slug' => 'under-construction'],
            ['display_name' => 'Renovated', 'slug' => 'renovated'],
            ['display_name' => 'Old', 'slug' => 'old'],
            ['display_name' => 'Abandoned', 'slug' => 'abandoned']
        ]);
    }
}
