<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class ShowController extends Controller
{
    public function __invoke(Manufacturer $manufacturer)
    {
        return view('admin.manufacturer.show', compact('manufacturer'));
    }
}
