<?php

namespace App\Http\Controllers;


use App\Models\Food;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FormStoreShopController;
use App\Models\Shop;
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

        return redirect()->route('shop.index')->with('success', 'Tạo cửa hàng thành công');
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('collaborators.restaurant.edit', compact('shop'));
    }

    public function update(FormStoreShopController $request, $id)
    {
        $shop = Shop::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $shop->image = $path;
        }
        $shop->address = $request->input('address');
        $shop->name = $request->input('name');
        $shop->user_id = auth()->id();
        $shop->save();
        return redirect()->route('shop.index');
    }

    public function delete($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        return redirect()->route('shop.index')->with('success', 'Đã xóa 1 cửa hàng!');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        if (!$keyword) {
            return redirect()->route('shop.index');
        }
        $shops = Auth::user()->shops()->where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('collaborators.restaurant.home', compact('shops'));
    }

    public function orders($idShop)
    {
        $shop = Shop::findOrFail($idShop);
        $orders = $shop->order_details->unique('order_id')->values();
        return view('collaborators.order.list_order',compact('orders','idShop'));
    }

    public function orderDetails($idShop,$idOrder)
    {

        $shop = Shop::findOrFail($idShop);
        $orderDetails = $shop->order_details()->where('order_id',$idOrder)->get();
        $totalQuantity = $shop->order_details()->where('order_id',$idOrder)->sum('quantity');
        return view('collaborators.order.order_detail',compact('orderDetails','totalQuantity'));
    }

}
