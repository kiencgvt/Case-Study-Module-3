<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('front-end.home', compact('foods'));
    }
}