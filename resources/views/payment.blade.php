@extends('layouts.app')

@section('content')

<section id="hero" class="hero section">
    <div class="container">
        <h1>Payment Page</h1>

        @if (!empty($cart))
            <ul>
                @foreach ($cart as $item)
                    <li>{{ $item['name'] }} - {{ $item['quantity'] }} x Rp.{{ $item['price'] }}</li>
                @endforeach
            </ul>
            <p>
                Total: Rp.{{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}
            </p>
            <form method="POST" action="{{ route('payment.submit') }}">
                @csrf
                <button type="submit">Submit Payment</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</seciton>
@endsection
