<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $genres = Genre::all();

        $query = Book::with(['genre', 'location']);

        if ($request->has('genre')) {
            $query->where('genre_id', $request->genre);
        }

        $books = $query->get();
       

        return view('books.books', compact('books', 'genres'));
    }
    public function show($id)
    {
        $book = Book::with(['genre', 'location'])->findOrFail($id);
        $genres = Genre::all();
        return view('books.book', compact('book', 'genres'));
    }


}
