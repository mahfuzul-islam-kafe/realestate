<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_types')->insert([
            ['display_name' => 'Apartment', 'slug' => 'apartment'  ],
            ['display_name' => 'House', 'slug' => 'house'],
            ['display_name' => 'Villa', 'slug' => 'villa'],
            ['display_name' => 'Studio', 'slug' => 'studio'],
            ['display_name' => 'Townhouse', 'slug' => 'townhouse'],
            ['display_name' => 'Condominium', 'slug' => 'condominium'],
            ['display_name' => 'Cottage', 'slug' => 'cottage']
        ]);
    }
}
