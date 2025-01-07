<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function dashboard() {
        return view('dashboard');
    }
    
    public function cart() {
        return view('cart');
    }
    
    public function payment() {
        return view('payment');
    }
    
    public function submitPayment(Request $request) {
        // Logika untuk memproses pembayaran (simulasi sementara)
        $success = true; // Ganti dengan logika QRIS
    
        if ($success) {
            return redirect()->route('orderNote')->with('message', 'Terimakasih sudah memesan, silahkan menunggu pesanan.');
        } else {
            return back()->with('error', 'Transaksi gagal, coba lagi.');
        }
    }
    
    public function orderNote() {
        return view('orderNote');
    }
    
}
