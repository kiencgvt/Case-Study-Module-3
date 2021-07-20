<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormShopRequest;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Auth::user()->shops;
        return view('collaborators.shop.home', compact('shops'));
    }

    public function createShop()
    {
        return view('collaborators.shop.create');
    }

    public function store(FormShopRequest $request)
    {

        $shop = new Shop();
        $shop->name = $request->input('name');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $shop->image = $path;
        }
        $shop->address = $request->input('address');
        $shop->user_id = auth()->id();
        $shop->save();
        return redirect()->route('collab.index')->with('success', 'Tạo cửa hàng thành công');
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('collaborators.shop.edit',compact('shop'));
    }
    public function update(Request $request,$id)
    {
        $shop = Shop::findOrFail($id);
        $shop->name = $request->input('name');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $shop->image = $path;
        }
        $shop->address = $request->input('address');
        $shop->user_id = auth()->id();
        $shop->save();
        return redirect()->route('shop.index');
    }

    public function deleteStore($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        return redirect()->route('shop.index');
    }
}
