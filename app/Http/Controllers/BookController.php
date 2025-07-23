<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with(['genre', 'location']);

        if ($request->has('genre')) {
            $query->where('genre_id', $request->genre);
        }

        $books = $query->get();

        return view('books.books', compact('books', 'genres'));
    }

}
