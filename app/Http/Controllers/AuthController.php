<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showFormLogin() {
        return view('front-end.layouts.login');
    }

    function login(Request $request) {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            return redirect()->route('home.index');
        } else {
            session()->flash('error-login','Account not exist!');
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
