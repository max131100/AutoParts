<?php

namespace App\Http\Controllers\Part;

use App\Models\Car;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Part;

class CreateController extends PartBaseController
{
    public function __invoke()
    {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        $cars = Car::all();
        return view('part.create', compact('manufacturers', 'categories', 'cars'));
    }
}
