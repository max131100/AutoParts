<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class ShowController extends Controller
{
    public function __invoke(CarModel $model)
    {
        return view('admin.model.show', compact('model'));
    }
}
