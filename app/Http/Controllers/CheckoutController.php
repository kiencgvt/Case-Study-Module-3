<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $payment = User::all();
        return view('front-end.Payment.successful', compact('payment'));
    }
}
