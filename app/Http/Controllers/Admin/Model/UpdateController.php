<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\Model\UpdateRequest;
use App\Models\CarModel;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CarModel $model)
    {
        $data = $request->validated();
        $model->update($data);
        return view('admin.model.show', compact('model'));
    }
}
