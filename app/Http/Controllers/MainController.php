<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function dashboard() {
        return view('dashboard');
    }
    
    public function saveCart(Request $request)
    {
        $cart = $request->input('cart'); // Retrieve the cart from the request
        session(['cart' => $cart]); // Save it to the session

        return response()->json(['success' => true]);
    }

    public function payment()
    {
        $cart = session('cart', []); // Retrieve cart from session, default to empty array if not set
        return view('payment', compact('cart'));
    }
    
    public function submitPayment(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'table_number' => 'required|integer',
    ]);

    $cart = session('cart', []);

    $totalPrice = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    $timestamp = now();

    foreach ($cart as $item) {
        DB::table('payments')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'table_number' => $validated['table_number'],
            'item_name' => $item['name'],
            'item_quantity' => $item['quantity'],
            'item_price' => $item['price'],
            'total_price' => $totalPrice,
            'created_at' => $timestamp,
        ]);
    }

    return redirect()->route('dashboard')->with('success', 'Payment submitted successfully!');
}
}
