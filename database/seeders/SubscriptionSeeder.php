<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Fetch some users to associate subscriptions with
         $users = User::take(3)->get(); // Assuming you have at least 3 users

         // Create some sample subscriptions
         foreach ($users as $user) {
             Subscription::create([
                 'user_id' => $user->id,
                 'plan' => 'Basic Plan', // Example plan
                 'start_date' => Carbon::now()->toDateString(),
                 'end_date' => Carbon::now()->addMonth()->toDateString(), // 1 month subscription
                 'price' => rand(100, 500), // Random price between 100 and 500
                 'currency' => ['USD', 'EUR', 'NIS'][array_rand(['USD', 'EUR', 'NIS'])], // Random currency
             ]);
         }
    }
}
