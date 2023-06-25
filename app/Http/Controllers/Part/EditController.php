<?php

namespace App\Http\Controllers\Part;

use App\Models\Car;
use App\Models\Part;

class EditController extends PartBaseController
{
    public function __invoke(Part $part)
    {
        $cars = Car::all();
        return view('part.edit', compact('part', 'cars'));
    }
}
