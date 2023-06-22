<?php

namespace App\Http\Controllers\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(CarMake $make)
    {
        return view('make.show', compact('make'));
    }
}
