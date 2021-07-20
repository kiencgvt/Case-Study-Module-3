<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $foods = Food::all();
        $categories = Category::all();
        $restaurants = Shop::all();
        return view('front-end.home', compact('foods', 'categories', 'restaurants'));
    }
}
