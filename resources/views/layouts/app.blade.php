<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons.min.css') }}">
</head>
<body>
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>