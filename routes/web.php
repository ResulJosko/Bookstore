<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

