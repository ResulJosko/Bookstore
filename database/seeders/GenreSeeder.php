<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Love',
            'Drama',
            'History',
            'Literature',
            'Law',
            'Development',
            'Bussiness',
            'Sport',
            'Medicine',
        ];

        foreach($objs as $obj){
            Genre::create([
                'name' => $obj,
            ]);
        }
    }
}
