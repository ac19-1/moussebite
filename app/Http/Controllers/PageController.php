<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mousse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function homePage() {
        $mousses = Mousse::all();
        $index = rand(0, 9);
        $recommended = $mousses[$index];

        $testimonies = [
            [
                'image' => $mousses[4]->image,
                'name' => $mousses[4]->name,
                'testimony' => 'This mousse is so good, it melts in your mouth and not too sweet. My favorite is layered fruit mousse! It\'s so great and so fresh!',
            ],
            [
                'image' => $mousses[5]->image,
                'name' => $mousses[5]->name,
                'testimony' => 'I like cheesecake and I love this! This mousse will make you feel like eating the real cheesecake with the fresh of lemon! Such a great combination',
            ],
            [
                'image' => $mousses[6]->image,
                'name' => $mousses[6]->name,
                'testimony' => 'So good and so fresh. Serve chilled is strongly recommended.',
            ],
            [
                'image' => $mousses[7]->image,
                'name' => $mousses[7]->name,
                'testimony' => 'The perfect combination of strawberry and white chocolate.',
            ]
        ];

        return view('home', ['recommended'=> $recommended, 'testimonies'=> $testimonies]);
    }

    function loginPage() {
        return view('login');
    }

    function registerPage() {
        return view('register');
    }

    function aboutPage() {
        return view('about');
    }

    function cartPage() {
        if(!Auth::check()) {
            return redirect('/');
        }
        $cart = Cart::all()->where('user_id', '=', Auth::user()->id);
        $total = 0;
        foreach ($cart as $item) {
            $total += (Mousse::find($item->mousse_id)->price * $item->quantity);
        }
        return view('cart', ['cart'=>$cart, 'total'=>$total]);
    }

    function detailPage(Request $request, $id) {
        $mousse = Mousse::find($id);
        return view('detail', ['mousse'=>$mousse]);
    }

    function moussePage() {
        $mousses = Mousse::all();
        return view('mousse', ['mousses'=>$mousses]);
    }
}
