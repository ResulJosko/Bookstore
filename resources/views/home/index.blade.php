@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-center">Welcome to the BookStore</h1>
        <p class="lead text-center mb-5">Browse books by genre, author, or location.</p>

        <div class="row">
            @forelse ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $book->image ? asset($book->image) : asset('images/book-placeholder.png') }}"
                            class="card-img-top" alt="{{ $book->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $book->name }}</h5>
                            <p class="text-muted mb-1"><small>By {{ $book->author }}</small></p>
                            <p class="card-text flex-grow-1"
                                style="overflow: hidden; max-height: 80px; text-overflow: ellipsis;">
                                {{ $book->description }}
                            </p>
                            <p class="mb-1"><strong>Genre:</strong> {{ $book->genre->name ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
                            <p><strong>Stock:</strong> {{ $book->stock }}</p>

                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary mt-auto">
                                <i class="bi bi-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No books available.</p>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('books.index') }}" class="btn btn-outline-primary">View All Books</a>
        </div>
    </div>
@endsection