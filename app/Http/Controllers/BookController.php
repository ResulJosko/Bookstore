<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function index()
    {
        $books = Book::with(['genre','location'])->get();
        return view('books.books', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with([['genre', 'location']])->FindorFail($id);
        return view('books.book', compact('book'));
    }
}
