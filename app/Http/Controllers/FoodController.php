<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormFoodRequest;
use App\Models\Category;
use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Auth::user()->foods()->paginate(3);
        return view('collaborators.foods.home',compact('foods'));
    }

    public function create()
    {
        $shops = Auth::user()->shops;
        $categories = Category::all();
        return view('collaborators.foods.create',compact('shops','categories'));
    }

    public function store(FormFoodRequest $request)
    {
        $food = new Food();
        if($request->hasFile('image')){
            $path= $request->file('image')->store('image','public');
            $food->image = $path;
        }
        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->promotion_price = $request->input('promotion_price');
        $food->service_charge = $request->input('service_charge');
        $food->shop_id = $request->input('shop_id');
        $food->category_id = $request->input('category_id');
        $food->preparation_time = $request->input('preparation_time');
        $food->tag = $request->input('tag');
        $food->save();
        Session::flash('success', 'Thêm mới món ăn thành công');
        return redirect()->route('collab.index');
    }

    public function edit($id)
    {
        $food = Food::find($id);
        $shops = Auth::user()->shops;
        $categories = Category::all();
        return view('collaborators.foods.edit',compact('food','shops','categories'));
    }

    public function update(FormFoodRequest $request,$id)
    {
        $food = Food::find($id);
        if($request->hasFile('image')){
            $path= $request->file('image')->store('image','public');
            $food->image = $path;
        }
        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->promotion_price = $request->input('promotion_price');
        $food->service_charge = $request->input('service_charge');
        $food->shop_id = $request->input('shop_id');
        $food->category_id = $request->input('category_id');
        $food->preparation_time = $request->input('preparation_time');
        $food->tag = $request->input('tag');
        $food->save();
        Session::flash('success', 'Chỉnh sửa món ăn thành công');
        return redirect()->route('collab.index');
    }

    public function delete($id)
    {
        $food = Food::find($id);
        Storage::disk('public')->delete($food->image);
        $food->delete();
        Session::flash('success', 'Xóa món ăn thành công');
        return redirect()->route('collab.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        if (!$keyword) {
            return redirect()->route('collab.index');
        }
        $foods = Food::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('collaborators.foods.home', compact('foods'));
    }

    public function list($id)
    {
        $category_id = $id;
        $categorycurrent = Category::findOrFail($id);
//        $foods = Food::where('category_id',$id)->get();
        $shopOfCategories = $categorycurrent->shops->unique();
        return view('front-end.trend',compact('categorycurrent','shopOfCategories', 'category_id'));
    }

    public function showDiscountFood()
    {
        $foodDiscount = Food::where('promotion_price','<>','NULL')->paginate(9);
        return view('front-end.show_food_discount',compact('foodDiscount'));
    }

    public function showFoodTag($id)
    {
        $food = Food::find($id);
        $foodTags = Food::where('tag',$food->tag)->paginate(5);
        return view('front-end.show_food_tag',compact('foodTags','food'));
    }

}
