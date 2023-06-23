<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class CreateController extends Controller
{
    public function __invoke()
    {
        $makes = CarMake::all();
        return view('model.create', compact('makes'));
    }
}
