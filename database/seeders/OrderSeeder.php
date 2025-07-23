<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'location_id' => Location::inRandomOrder()->first()->id,
        ]);
    }
}
