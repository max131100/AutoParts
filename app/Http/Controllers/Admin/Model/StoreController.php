<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\Model\StoreRequest;
use App\Models\CarModel;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        CarModel::firstOrCreate($data);
        return redirect()->route('admin.model.index');
    }
}
