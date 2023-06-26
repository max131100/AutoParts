<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.make.create');
    }
}
