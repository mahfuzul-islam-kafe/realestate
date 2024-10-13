<?php

namespace Database\Seeders;

use App\Models\Alert;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Fetch some users to associate alerts with
          $users = User::take(3)->get(); // Assuming you have at least 3 users

          foreach ($users as $user) {
              // Create a sample alert for each user
              Alert::create([
                  'user_id' => $user->id,
                  'criteria' => json_encode([
                      'min_price' => rand(100000, 500000),
                      'max_price' => rand(500001, 1000000),
                      'location' => 'city-' . rand(1, 10),
                  ]),
                  'alert_frequency' => ['daily', 'weekly', 'monthly'][array_rand(['daily', 'weekly', 'monthly'])],
                  'is_active' => (bool) rand(0, 1),
              ]);
          }
    }
}
