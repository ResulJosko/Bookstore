@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div
        style="position: relative; background: url('/images/open-book-bg.png') no-repeat center center; background-size: cover; width: 600px; height: 400px;">
        <img src="{{ asset($book->image) }}" alt="{{ $book->title }}"
            style="position: absolute; left: 50px; top: 50px; width: 200px;">
    </div>

    <h2>{{ $book->title }}</h2>
    <p><strong>Author: </strong> {{ $book->autor }}</p>
    <p><strong>Description: </strong> {{ $book->description }}</p>
    <p><strong>Genre:</strong> {{ $book->genre->name ?? 'N/A' }}</p>
    <p><strong>Price: $</strong>{{ $book->price }}</p>
    <p><strong>Barcode: </strong>{{ $book->barcode }}</p>
    <p><strong>Language: </strong>{{ $book->language }}</p>
    <p><strong>Stock: </strong>{{ $book->stock }}</p>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Back to list
    </a>
    <form action="{{ route('orders.index') }}" method="POST">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book->id }}">

        <button type="submit" class="btn btn-primary mt-3">
            <i class="bi bi-cart-plus"></i> Order Thi Book
        </button>
    </form>

</div>
@endsection