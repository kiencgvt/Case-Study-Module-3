<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $foods = Food::all();
        $shops = Shop::all();
        return view('front-end.home', compact('foods', 'shops'));
    }
}
