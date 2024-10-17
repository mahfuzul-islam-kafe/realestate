<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['display_name' => 'Apartment', 'slug' => 'apartment'],
            ['display_name' => 'House', 'slug' => 'house'],
            ['display_name' => 'Villa', 'slug' => 'villa'],
            ['display_name' => 'Studio', 'slug' => 'studio'],
            ['display_name' => 'Townhouse', 'slug' => 'townhouse'],
            ['display_name' => 'Condominium', 'slug' => 'condominium'],
            ['display_name' => 'Cottage', 'slug' => 'cottage']
        ]);
    }
}
