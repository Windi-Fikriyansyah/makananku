<!-- // Order Note Page: resources/views/orderNote.blade.php -->
@extends('layout')

@section('content')
<h2>Detail Pemesanan</h2>
<div class="split">
    <div class="left">
        <h3>Informasi Pemesanan</h3>
        <div>
            Nomor Meja: 5
            <br>Nama: John Doe
            <br>Email: john@example.com
            <br>No. Telp: 08123456789
            <br>Tanggal Pemesanan: {{ now() }}
        </div>
    </div>
    <div class="right">
        <h3>Daftar Pesanan</h3>
        <ul>
            <li>Item 1</li>
            <li>Drink 1</li>
        </ul>
    </div>
</div>
<div>
    <button>Download Nota</button>
    <button>New Order</button>
</div>
@endsection