<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class DeleteController extends Controller
{
    public function __invoke(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index');
    }
}
