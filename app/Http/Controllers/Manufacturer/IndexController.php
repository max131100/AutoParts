<?php

namespace App\Http\Controllers\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\CarMake;
use App\Models\Manufacturer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturer.index', compact('manufacturers'));
    }

}
