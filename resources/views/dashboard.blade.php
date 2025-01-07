<!-- // Dashboard Page: resources/views/dashboard.blade.php -->
@extends('layout')

@section('content')
<h2>Food</h2>
<div class="card-container">
    @for ($i = 0; $i < 12; $i++)
        <div class="card">Item {{ $i + 1 }}</div>
    @endfor
</div>

<h2>Drink</h2>
<div class="card-container">
    @for ($i = 0; $i < 12; $i++)
        <div class="card">Drink {{ $i + 1 }}</div>
    @endfor
</div>

<button class="order-btn">Pesan</button>
@endsection