<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $books = Book::with(relations: 'genre')->limit(6)->get();
        return view('home.index', compact('books', 'genres'));

    }


}
