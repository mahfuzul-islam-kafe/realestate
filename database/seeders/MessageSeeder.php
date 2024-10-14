<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch some users to send and receive messages
        $users = User::take(4)->get(); // Assuming you have at least 4 users

        // Create some sample messages
        foreach ($users as $sender) {
            foreach ($users as $receiver) {
                if ($sender->id !== $receiver->id) {
                    Message::create([
                        'sender_id' => $sender->id,
                        'receiver_id' => $receiver->id,
                        'content' => 'Message from ' . $sender->name . ' to ' . $receiver->name,
                    ]);
                }
            }
        }
    }
}
