<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Order_detail;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        $restaurants = Shop::all();
        $discountedFoods = Food::where('promotion_price', '<>', 'NULL')->orderBy('promotion_price')->take(3)->get();
        $fastDeliveryFoods = Food::where('preparation_time', 10)->get();
        $mostSellFoods = Order_detail::select('food_id', DB::raw('sum(quantity) as total'))
            ->groupBy('food_id')
            ->orderByDesc('total')
            ->limit(9)
            ->get();
        $mostViewFoods = DB::table('foods')->orderBy('view_count', 'desc')->limit(9)->get();

        return view('front-end.home', compact('foods', 'categories', 'restaurants', 'discountedFoods', 'mostSellFoods', 'fastDeliveryFoods','mostViewFoods'));
    }


}
