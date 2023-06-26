<?php

namespace App\Http\Controllers\Admin\Part;

use App\Models\Car;
use App\Models\Category;
use App\Models\Manufacturer;

class CreateController extends PartBaseController
{
    public function __invoke()
    {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        $cars = Car::all();
        return view('admin.part.create', compact('manufacturers', 'categories', 'cars'));
    }
}
