<?php

namespace App\Http\Controllers\Manufacturer;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('manufacturer.create');
    }
}
