@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>{{ $book->title }}</h2>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Description:</strong> {{ $book->description }}</p>
        <p><strong>Genre:</strong> {{ $book->genre->name ?? 'N/A' }}</p>
        <p><strong>Location:</strong> {{ $book->location->name ?? 'N/A' }}</p>

        <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">
            <i class="bi bi-arrow-left"></i> Back to list
        </a>
    </div>
@endsection