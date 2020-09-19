<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function addToCart(Request $request) {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $request->validate([
            'size_id' => 'required',
            'quantity' => 'required|numeric|min:1'
        ], [
            'size_id.required' => 'Please pick the size.',
            'quantity.required' => 'Please fill the quantity.',
            'quantity.min' => 'Quantity cannot be less than :min'
        ]);

        $cart = new Cart();
        $cart->user_id = $request->user_id;
        $cart->mousse_id = $request->mousse_id;
        $cart->size_id = $request->size_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back();
    }
}
