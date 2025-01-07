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

            <!-- Payment Form -->
            <form method="POST" action="{{ route('payment.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="table_number">Table Number:</label>
                    <input type="number" id="table_number" name="table_number" required>
                </div>
                <button class="btn-buy" type="submit">Submit Payment</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</section>
@endsection
