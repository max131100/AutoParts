<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\CarMake;
use App\Models\CarModel;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $models = CarModel::all();
        return view('model.index', compact('models'));
    }

}
