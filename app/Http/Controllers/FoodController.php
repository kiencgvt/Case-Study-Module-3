<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::paginate(20);
        $shops = Shop::all();
        $categories = Category::all();
        return view('collaborators.home',compact('foods','shops','categories'));
    }

    public function create()
    {
        $shops = Shop::all();
        $categories = Category::all();
        return view('collaborators.create',compact('shops','categories'));
    }

    public function store(Request $request)
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
        $food->require_date = $request->input('require_date');
        $food->tag = $request->input('tag');
        $food->save();
        Session::flash('success', 'Thêm mới món ăn thành công');
        return redirect()->route('collab.index');
    }

    public function edit($id)
    {
        $food = Food::find($id);
        $shops = Shop::all();
        $categories = Category::all();
        return view('collaborators.edit',compact('food','shops','categories'));
    }

    public function update(Request $request,$id)
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
        $food->require_date = $request->input('require_date');
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
//    public function search(Request $request)
//    {
//        $keyword = $request->input('search');
//        if (!$keyword) {
//            return redirect()->route('collab.index');
//        }
//        $foods = Food ::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
//        return view('products.list', compact('foods'));
//    }
}
