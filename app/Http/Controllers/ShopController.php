<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreShopController;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class ShopController extends Controller
{
    function index()
    {
        $shops = Auth::user()->shops;
        return view('collaborators.restaurant.home', compact('shops'));
    }

    public function create()
    {
        return view('collaborators.restaurant.create');
    }

    public function store(FormStoreShopController $request)
    {
        $shop = new Shop();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $shop->image = $path;
        }
        $shop->address = $request->input('address');
        $shop->name = $request->input('name');
        $shop->user_id = auth()->id();
        $shop->save();
        return redirect()->route('shop.index')->with('success','Tạo cửa hàng thành công');
    }
}
