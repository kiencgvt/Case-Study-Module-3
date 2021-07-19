<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showFormLogin() {
        return view('front-end.layouts.login');
    }
}
