<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

}
