<?php

namespace App\Http\Controllers\User\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\UpdateRequest;
use App\Models\Cart;
use App\Models\Part;

class DeleteController extends Controller
{
    public function __invoke(UpdateRequest $request) {
        $cart = auth()->user()->cart;
        $data = $request->validated();
        $part = Part::find($data['part_id']);
        $cart->parts()->detach($part);
        return redirect()->route('user.cart.index');
    }
}
