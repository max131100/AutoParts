<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class IndexController extends Controller
{
    public function __invoke()
    {
        $makes = CarMake::all();
        return view('admin.make.index', compact('makes'));
    }

}
