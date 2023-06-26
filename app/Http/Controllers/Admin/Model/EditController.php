<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\CarMake;
use App\Models\CarModel;

class EditController extends Controller
{
    public function __invoke(CarModel $model)
    {
        $makes = CarMake::all();
        return view('admin.model.edit', compact('model', 'makes'));
    }
}
