<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class ShowController extends Controller
{
    public function __invoke(CarModel $model)
    {
        return view('model.show', compact('model'));
    }
}
