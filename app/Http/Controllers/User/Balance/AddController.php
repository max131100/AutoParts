<?php

namespace App\Http\Controllers\User\Balance;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\BalanceRequest;
use App\Models\User;

class AddController extends Controller
{
    public function __invoke(BalanceRequest $request)
    {
        $user = auth()->user();
        $data = $request->validated();
        $user->update(['balance' => $user->balance += $data['amount']]);
        return redirect()->route('user.balance.index');
    }
}
