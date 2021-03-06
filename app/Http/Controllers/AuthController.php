<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function __construct()
    {
    }

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

    public function showFormRegister()
    {
        return view('front-end.layouts.register');
    }

    public function register(Register $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $request->role;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $user->avatar = $path;
        }
        $user->save();
        Session::flash('success', 'Sign Up Success');
        return redirect()->route('auth.showFormLogin');
    }

}
