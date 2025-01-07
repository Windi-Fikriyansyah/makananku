<!-- // Payment Page: resources/views/payment.blade.php -->
@extends('layout')

@section('content')
<h2>Pembayaran</h2>
<form action="{{ route('payment.submit') }}" method="POST">
    @csrf
    <div class="form-grid">
        <div>
            <label>Nama Pelanggan</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>No Telepon</label>
            <input type="text" name="phone" required>
        </div>
        <div>
            <label>Nomor Meja</label>
            <input type="text" name="table_number" required>
        </div>
    </div>
    <button type="submit" class="qris-btn">QRIS</button>
</form>
@endsection