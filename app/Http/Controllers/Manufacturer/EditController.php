<?php

namespace App\Http\Controllers\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;

class EditController extends Controller
{
    public function __invoke(Manufacturer $manufacturer)
    {
        return view('manufacturer.edit', compact('manufacturer'));
    }
}
