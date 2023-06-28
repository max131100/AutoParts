<?php

namespace App\Http\Controllers\User\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class IndexController extends Controller
{
    public function __invoke() {
        $user = auth()->user();
        $cart = Cart::where('user_id', $user->id)->get()->first();
        $parts = [];
        if ($cart === null || $cart->count() == 0) {
            $cart = Cart::create(['user_id' => $user->id]);
        }
        else {
            $parts = $cart->parts;
        }
        return view('main.cart.index', compact('parts'));
    }
}
