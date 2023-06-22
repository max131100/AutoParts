<?php

namespace App\Http\Controllers\Make;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('make.create');
    }
}
