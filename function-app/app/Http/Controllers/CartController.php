<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store_cart(Request $request)
    {
        $product_id = $request->product_id;

        $user_id = Auth::guard('web')->user()->id;

        $cart = Cart::where("user_id", $user_id)
            ->where("product_id", $product_id)
            ->first();

        if ($cart) {
            $cart->increment('count');
            return "update";
        } else {
            Cart::create([
                "user_id" => $user_id,
                "product_id" => $product_id,
                "count" => 1
            ]);

            return "insert";
        }
    }
}
