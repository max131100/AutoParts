<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\Model\UpdateRequest;
use App\Models\CarModel;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CarModel $model)
    {
        $data = $request->validated();
        $model->update($data);
        return view('model.show', compact('model'));
    }
}
