<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class EditController extends Controller
{
    public function __invoke(Manufacturer $manufacturer)
    {
        return view('admin.manufacturer.edit', compact('manufacturer'));
    }
}
