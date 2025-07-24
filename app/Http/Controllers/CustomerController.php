<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Genre;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $genres = Genre::all();
        return view('customers.index', compact('customers', 'genres'));
    }

}
