<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class IndexController extends Controller
{
    public function __invoke()
    {
        $models = CarModel::all();
        return view('admin.model.index', compact('models'));
    }

}
