<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mousse;
use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

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

    function deleteCart(Request $request) {
        DB::table('carts')
            ->where('user_id','=',Auth::user()->id)
            ->where('mousse_id','=',$request->mousse_id)
            ->where('size_id','=',$request->size_id)
            ->delete();
        return redirect()->back();
    }

    function checkout(Request $request) {
        $user_id = Auth::user()->id;
        $cart = Cart::all()->where('user_id', '=', $user_id);

        $header = new TransactionHeader();
        $header->user_id = $user_id;
        $header->date = Carbon::now();
        $header->save();

        foreach ($cart as $item) {
            $detail = new TransactionDetail();
            $detail->transaction_id = $header->id;
            $detail->mousse_id = $item->mousse_id;
            $detail->size_id = $item->size_id;
            $detail->quantity = $item->quantity;
            $detail->save();

            $mousse = Mousse::find($item->mousse_id);
            $mousse->stock = ($mousse->stock - $item->quantity);
            $mousse->save();
        }

        DB::table('carts')->where('user_id', '=', $user_id)->delete();
        return redirect('/');
    }
}
