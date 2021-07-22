<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    function detail($id)
    {
        $restaurantCurrent = Shop::findOrFail($id);
        $categoriesOfShop = $restaurantCurrent->categories->unique();
        return view('front-end.restaurants.detail', compact('restaurantCurrent','categoriesOfShop'));
    }

}
