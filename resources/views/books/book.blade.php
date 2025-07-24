@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <img src="{{ asset($book->image ) }}" alt="#">
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
    </div>
@endsection