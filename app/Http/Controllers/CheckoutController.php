<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function payment()
    {
        $user = Auth::user();

        $cart = Session::get('cart');

        $orders = new Order();
        $orders->order_date = date('Y-m-d');
        $orders->require_date = date('Y-m-d');
        $orders->status = 'da gui';
        $orders->user_id = $user['id'];
        $orders->total_price = $cart->totalPrice;
        $orders->save();


        foreach ($cart->items as $key => $value ){
            $orderDetail = new Order_detail();
            $orderDetail->order_id = $orders->id;
            $orderDetail->food_id = $key;
            $orderDetail->quantity = $value['quantity'];
            $orderDetail->price_each = $value['price']/$value['quantity'];
            $orderDetail->save();
        }

        Session::forget('cart');

        return view('front-end.Payment.successful', compact('user'));
    }
}
