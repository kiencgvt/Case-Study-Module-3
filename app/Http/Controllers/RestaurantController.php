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
        /*$restaurantCurrent = Shop::findOrFail($id);
        $categoriesOfShop = $restaurantCurrent->categories->unique();
        return view('front-end.restaurants.detail', compact('restaurantCurrent','categoriesOfShop'));*/
        $restaurantCurrent = Shop::findOrFail($id);
        $foods = Food::where('shop_id',$id)->orderBy('category_id')->get();
        return view('front-end.restaurants.detail', compact('restaurantCurrent','foods'));
    }

    public function listFoods($restaurant_id, $category_id)
    {
        $category_name = Category::find($category_id)->name;
        $restaurantCurrent = Shop::findOrFail($restaurant_id);
        $foods_category = Food::where([
            ['shop_id', $restaurant_id],
            ['category_id', $category_id]
        ])->get();
        return view('front-end.restaurants.detail', compact('restaurantCurrent','foods_category', 'category_id','category_name'));
    }

    public function showFoods($idfood)
    {
        $food = Food::find($idfood);
        $shop = Shop::find($food->shop_id);
        $category = Category::find($food->category_id);
        return view('front-end.show_foods',compact('food','shop','category'));
    }
}
