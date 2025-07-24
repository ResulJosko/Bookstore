@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Orders</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Book</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->customer->name ?? 'N/A' }}</td>
                        <td>{{ $order->book->name ?? 'N/A' }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection