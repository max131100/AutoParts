<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Car $car)
    {
        $data = $request->validated();
        $car->update($data);
        return view('admin.car.show', compact('car'));
    }
}
