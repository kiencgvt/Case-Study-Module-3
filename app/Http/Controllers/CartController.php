<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCart($idFood)
    {
        $product = Food::find($idFood);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $cart->add($product);
        session()->put('cart', $cart);
        return back();
    }

    function index()
    {
        $cart = session()->get('cart');
        return view('front-end.cart', compact('cart'));
    }

    function deleteToCart($idFood)
    {
        $food = Food::find($idFood);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        $cart->delete($food);
        session()->put('cart', $cart);
        return back();
    }
}
