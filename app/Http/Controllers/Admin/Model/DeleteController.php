<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\CarModel;

class DeleteController extends Controller
{
    public function __invoke(CarModel $model)
    {
        $model->delete();
        return redirect()->route('admin.model.index');
    }
}
