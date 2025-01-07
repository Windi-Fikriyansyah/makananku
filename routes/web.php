<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Beranda | Makananku',
        'description' => 'Makananku - Platform makanan favorit Anda.',
        'keywords' => 'makanan, kuliner, makanan favorit',
    ]);
});

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'dashboard'])->name('dashboard');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/payment', [MainController::class, 'payment'])->name('payment');
Route::post('/payment/submit', [MainController::class, 'submitPayment'])->name('payment.submit');
Route::get('/order-note', [MainController::class, 'orderNote'])->name('orderNote');
