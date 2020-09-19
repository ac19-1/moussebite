<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request) {
        if(Auth::attempt($request->only(['email','password']))) {
            return redirect('/');
        }
        return redirect()->back();
    }

    function logout() {
        Auth::logout();
        return redirect('/login');
    }

    function register(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/login');
    }
}
