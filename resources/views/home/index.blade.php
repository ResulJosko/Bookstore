@extends('layouts.app')

@section('content')
    <div class="container py-5 text-center">
        <h1>Welcome to the BookStore</h1>
        <p class="lead">Browse books by genre, author, or location.</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">
            <i class="bi bi-book-half me-1"></i> View All Books
        </a>
    </div>
@endsection