@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customers</h1>
    <ul class="list-group">
        @foreach($customers as $customer)
            <li class="list-group-item">
                <strong>{{ $customer->name }}</strong><br>
                Email: {{ $customer->email }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
