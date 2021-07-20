<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    function detail($id)
    {
        $restaurantCurrent = Shop::findOrFail($id);
        return view('front-end.restaurants.detail', compact('restaurantCurrent'));
    }

}
