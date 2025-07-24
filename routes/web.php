<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');



