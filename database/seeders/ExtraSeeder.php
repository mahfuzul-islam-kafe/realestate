<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         DB::table('property_types')->insert([
            ['display_name' => 'Apartment', 'slug' => 'apartment'],
            ['display_name' => 'House', 'slug' => 'house'],
            ['display_name' => 'Villa', 'slug' => 'villa'],
        ]);
        DB::table('property_conditions')->insert([
            ['display_name' => 'New', 'slug' => 'new'],
            ['display_name' => 'Used', 'slug' => 'used'],
        ]);
        DB::table('entry_conditions')->insert([
            ['display_name' => 'Good', 'slug' => 'good'],
            ['display_name' => 'Needs Renovation', 'slug' => 'needs-renovation'],
        ]);
        DB::table('ad_types')->insert([
            ['display_name' => 'For Sale', 'slug' => 'for-sale'],
            ['display_name' => 'For Rent', 'slug' => 'for-rent'],
        ]);
    }
}
