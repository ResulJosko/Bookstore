<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
