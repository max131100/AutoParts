<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $manufacturers = Manufacturer::all();
        return view('admin.manufacturer.index', compact('manufacturers'));
    }

}
