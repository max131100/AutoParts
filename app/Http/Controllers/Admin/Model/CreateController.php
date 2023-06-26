<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class CreateController extends Controller
{
    public function __invoke()
    {
        $makes = CarMake::all();
        return view('admin.model.create', compact('makes'));
    }
}
