<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'last_name' => 'last name',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // Hashing the password
            'role' => 'admin',
            'is_subscribed' => true,
            'phone' => '1234567890',
            'profile_image' => null,
            'social_login' => null,
            'last_login' => now(),
        ]);
        User::create([
            'name' => 'Admin User 1',
            'last_name' => 'last name',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'), // Hashing the password
            'role' => 'admin',
            'is_subscribed' => true,
            'phone' => '1234567890',
            'profile_image' => null,
            'social_login' => null,
            'last_login' => now(),
        ]);

        User::create([
            'name' => 'Admin User 2',
            'last_name' => 'last name',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_subscribed' => false,
            'phone' => '0987654321',
            'profile_image' => null,
            'social_login' => null,
            'last_login' => now(),
        ]);

        // Agent Users
        User::create([
            'name' => 'Agent User 1',
            'last_name' => 'last name',
            'email' => 'agent1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
            'is_subscribed' => true,
            'phone' => '9876543210',
            'profile_image' => null,
            'social_login' => null,
            'last_login' => now(),
        ]);

        User::create([
            'name' => 'Agent User 2',
            'last_name' => 'last name',
            'email' => 'agent2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
            'is_subscribed' => false,
            'phone' => '8765432109',
            'profile_image' => null,
            'social_login' => null,
            'last_login' => now(),
        ]);

        // Regular Users
        for ($i = 1; $i <= 6; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'last_name' => 'last name',
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'is_subscribed' => false,
                'phone' => null,
                'profile_image' => null,
                'social_login' => null,
                'last_login' => null,
            ]);
        }
    }
}
