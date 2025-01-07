<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
}
