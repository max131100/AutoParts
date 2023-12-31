<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;
use App\Models\CarMake;

class DeleteController extends Controller
{
    public function __invoke(CarMake $make)
    {
        $make->delete();
        return redirect()->route('admin.make.index');
    }
}
