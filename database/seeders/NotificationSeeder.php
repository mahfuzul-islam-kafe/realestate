<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Fetch some users to associate notifications with
           $users = User::take(5)->get(); // Assuming you have at least 5 users

           // Create some sample notifications for each user
           foreach ($users as $user) {
               Notification::create([
                   'user_id' => $user->id,
                   'message' => 'This is a sample notification for ' . $user->name,
                   'read_status' => rand(0, 1), // Randomly mark as read or unread
               ]);
   
               Notification::create([
                   'user_id' => $user->id,
                   'message' => 'Another notification for ' . $user->name,
                   'read_status' => false, // Unread notification
               ]);
           }
    }
}
