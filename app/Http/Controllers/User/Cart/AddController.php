<?php

namespace App\Http\Controllers\User\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\UpdateRequest;
use App\Models\Cart;
use App\Models\Part;

class AddController extends Controller
{
    public function __invoke(UpdateRequest $request) {
        $user = auth()->user();
        $cart = $user->cart;
        if ($cart === null) {
            $cart = Cart::create(['user_id' => $user->id]);
        }
        $data = $request->validated();
        $part = Part::find($data['part_id']);
        $cart->parts()->attach($part);
        return redirect()->route('user.cart.index');
    }
}
