<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\StoreRequest;
use App\Models\Car;
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Car::firstOrCreate($data);
        return redirect()->route('car.index');
    }
}
