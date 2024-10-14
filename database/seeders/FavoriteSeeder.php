<?php

namespace Database\Seeders;

use App\Models\Favorite;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Fetch some users and properties to associate favorites with
         $users = User::take(3)->get(); // Assuming you have at least 3 users
         $properties = Property::take(5)->get(); // Assuming you have at least 5 properties
 
         // Create some sample favorites
         foreach ($users as $user) {
             foreach ($properties as $property) {
                 Favorite::create([
                     'user_id' => $user->id,
                     'property_id' => $property->id,
                 ]);
             }
         }
    }
}
