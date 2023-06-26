<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.manufacturer.create');
    }
}
