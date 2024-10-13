<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some transactions
        $properties = Property::take(3)->get(); // Assuming you have at least 3 properties
        $buyers = User::where('role', 'user')->take(3)->get(); // Assuming these are regular users
        $sellers = User::where('role', 'agent')->take(3)->get(); // Assuming these are agents

        foreach ($properties as $index => $property) {
            Transaction::create([
                'property_id' => $property->id,
                'buyer_id' => $buyers[$index]->id,
                'seller_id' => $sellers[$index]->id,
                'type' => $index % 2 == 0 ? 'buy' : 'rent', // Alternating between buy and rent
                'price' => rand(100000, 1000000) / 100, // Random price between 1,000.00 and 10,000.00
                'currency' => ['USD', 'EUR', 'NIS'][array_rand(['USD', 'EUR', 'NIS'])], // Random currency
                'status' => 'pending',
            ]);
        }
    }
}
