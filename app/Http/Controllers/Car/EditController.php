<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarModel;

class EditController extends Controller
{
    public function __invoke(Car $car)
    {
        $models = CarModel::all();
        return view('car.edit', compact('car', 'models'));
    }
}
