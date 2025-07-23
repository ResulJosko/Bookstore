@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">All Books</h2>
        <div class="row">
            @forelse($books as $book)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                            <p class="card-text"><strong>Genre:</strong> {{ $book->genre->name ?? 'N/A' }}</p>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No books available.</p>
            @endforelse
        </div>
    </div>
@endsection