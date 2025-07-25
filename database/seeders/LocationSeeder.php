<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Ashagabat',
            'Arkadag',
            'Ahal',
            'Balkan',
            'Mary',
            'Lebap',
            'Dashoguz',
        ];

        foreach ($objs as $obj) {
            Location::create([
                'name' => $obj,
            ]);
        }
    }
}
