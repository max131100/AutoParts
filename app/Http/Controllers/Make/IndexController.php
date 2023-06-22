<?php

namespace App\Http\Controllers\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $makes = CarMake::all();
        return view('make.index', compact('makes'));
    }

}
