<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with(['book', 'customer'])->get();
        $genres = Genre::all();

        return view('orders.index', compact('orders', 'genres'));
    }

}
