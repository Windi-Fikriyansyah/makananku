<!-- // Cart Page: resources/views/cart.blade.php -->
@extends('layout')

@section('content')
<h2>Keranjang</h2>
<div class="split">
    <div class="left">
        <h3>Food</h3>
        <ul>
            <li>Item 1</li>
        </ul>

        <h3>Drink</h3>
        <ul>
            <li>Drink 1</li>
        </ul>
    </div>
    <div class="right">
        <h4>Payment Details</h4>
        <div>
            Total: RP 50,000
        </div>
        <button class="payment-btn">Payment</button>
    </div>
</div>
@endsection