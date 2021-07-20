<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    function index()
    {
        $shops = Auth::user()->shops;
        return view('collaborators.restaurant.home',compact('shops'));
    }
}
