<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function showDetail()
    {
        $foods = Food::all();
        $restaurants = Shop::all();
        return view('front-end.search.search', compact('foods', 'restaurants'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $restaurants = Shop::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('front-end.search.search', compact('restaurants'));
    }
}
