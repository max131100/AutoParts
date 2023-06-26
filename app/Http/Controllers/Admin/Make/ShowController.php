<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class ShowController extends Controller
{
    public function __invoke(CarMake $make)
    {
        return view('admin.make.show', compact('make'));
    }
}
