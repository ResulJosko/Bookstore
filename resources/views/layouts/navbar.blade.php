<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">BookStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="genresDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Genres
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="genresDropdown">
                        @foreach($genres as $genre)
                            <li>
                                <a class="dropdown-item" href="{{ route('books.index') }}?genre={{ $genre->id }}">
                                    {{ $genre->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">All Books</a>
                </li>

            </ul>
        </div>
    </div>
</nav>