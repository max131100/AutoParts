<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class CreateController extends Controller
{
    public function __invoke()
    {
        $models = CarModel::all();
        return view('car.create', compact('models'));
    }
}
