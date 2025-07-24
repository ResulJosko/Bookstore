<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [
                'name' => 'Me Before You',
                'autor' => 'Jojo Moyes',
                'description' => 'Louisa Clark becomes a caregiver for Will Traynor, a once-active man now in a wheelchair. A moving story about love, dignity, and difficult choices.',
                'price' => 190,
                'image' => '1.jpg',
                'stock' => 5,
            ],
            [
                'name' => 'The Kite Runner',
                'autor' => 'Khaled Hosseini',
                'description' => 'A tale of friendship, betrayal, and redemption set against the backdrop of a changing Afghanistan.',
                'price' => 170,
                'image' => 'img/2.jpg',
                'stock' => 7,
            ],
            [
                'name' => 'The Diary of a Young Girl',
                'autor' => 'Anne Frank',
                'description' => 'The real diary of Anne Frank, a Jewish girl hiding from the Nazis. A haunting, deeply human portrait of hope under oppression.',
                'price' => 160,
                'image' => '3.jpg',
                'stock' => 4,
            ],
            [
                'name' => 'Jane Eyre',
                'autor' => 'Charlotte Brontë',
                'description' => 'The story of an orphaned girl who overcomes adversity and falls in love with the mysterious Mr. Rochester.',
                'price' => 180,
                'image' => '2.jpg',
                'stock' => 6,
            ],
            [
                'name' => 'The Nine: Inside the Secret World of the Supreme Court',
                'autor' => 'Jeffrey Toobin',
                'description' => 'A behind-the-scenes look at America’s highest court, its justices, and its role in shaping the country.',
                'price' => 200,
                'image' => '3.jpg',
                'stock' => 3,
            ],
            [
                'name' => 'The Bottom Billion',
                'autor' => 'Paul Collier',
                'description' => 'Explores why the poorest countries fail to grow and offers practical solutions to lift them out of poverty.',
                'price' => 150,
                'image' => '3.jpg',
                'stock' => 8,
            ],
            [
                'name' => 'Rich Dad Poor Dad',
                'autor' => 'Robert Kiyosaki',
                'description' => 'A bestselling classic that contrasts two approaches to money—one rich, one poor—and how to achieve financial independence.',
                'price' => 190,
                'image' => '2.jpg',
                'stock' => 10,
            ],
            [
                'name' => 'Shoe Dog',
                'autor' => 'Phil Knight',
                'description' => 'The founder of Nike shares his journey from selling shoes out of a car trunk to building one of the world’s most iconic brands.',
                'price' => 210,
                'image' => '3.jpg',
                'stock' => 5,
            ],
            [
                'name' => 'Do No Harm',
                'autor' => 'Henry Marsh',
                'description' => 'A neurosurgeon’s gripping reflections on success, failure, and the fragile nature of life under the knife.',
                'price' => 200,
                'image' => 'img/2.jpg',
                'stock' => 4,
            ],
        ];

        foreach ($objs as $obj) {
            Book::create([
                'genre_id' => Genre::inRandomOrder()->first()->id,
                'name' => $obj['name'],
                'autor' => $obj['autor'],
                'description' => $obj['description'],
                'language' => fake()->randomElement(['en', 'ru', 'tm']),
                'price' => $obj['price'],
                'image' => $obj['image'],
                'barcode' => fake()->ean8(),
                'stock' => $obj['stock'],
            ]);
        }
    }
}
