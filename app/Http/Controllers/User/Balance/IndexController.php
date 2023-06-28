<?php

namespace App\Http\Controllers\User\Balance;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        return view('main.balance.index', compact('user'));
    }
}
