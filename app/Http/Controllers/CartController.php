<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($idFood)
    {
        $food = Food::find($idFood);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $cart->add($food);
        session()->put('cart', $cart);
        return back();
    }

    function index()
    {
        $cart = session()->get('cart');
        $food = $cart->items;
        return view('front-end.restaurants.detail', compact('cart', 'food'));
    }

    function delete($idFood)
    {
        $food = Food::find($idFood);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $cart->delete($food);
        session()->put('cart', $cart);
        $data = [
            'totalPriceCart' => session()->get('cart')->totalPrice,
            'totalQuantity' => session()->get('cart')->totalQuantity,
            'message' =>  'Delete success'
        ];
        return response()->json($data );
    }
    function updateToCart(Request $request, $idFood) {
        $food = Food::find($idFood);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $cart->update($food, $request->newQuantity);
        session()->put('cart', $cart);

        $data = [
            'foodUpdate' => session()->get('cart')->items[$idFood],
            'totalQuantity' => session()->get('cart')->totalQuantity,
            'totalPriceCart' => session()->get('cart')->totalPrice,
        ];

        return response()->json($data);
    }
}
