<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\UpdateRequest;
use App\Models\Manufacturer;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Manufacturer $manufacturer)
    {
        $data = $request->validated();
        $manufacturer->update($data);
        return view('admin.manufacturer.show', compact('manufacturer'));
    }
}
