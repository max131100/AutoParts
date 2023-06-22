<?php

namespace App\Http\Controllers\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class EditController extends Controller
{
    public function __invoke(CarMake $make)
    {
        return view('make.edit', compact('make'));
    }
}
