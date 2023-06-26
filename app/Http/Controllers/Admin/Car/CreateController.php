<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class CreateController extends Controller
{
    public function __invoke()
    {
        $models = CarModel::all();
        return view('admin.car.create', compact('models'));
    }
}
