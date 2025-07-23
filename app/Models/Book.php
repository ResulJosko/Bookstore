<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'autor',
        'genre_id',
        'description',
        'language',
        'price',
        'barcode',
        'image',
        'stock'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
