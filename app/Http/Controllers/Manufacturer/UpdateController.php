<?php

namespace App\Http\Controllers\Manufacturer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\UpdateRequest;
use App\Models\CarMake;
use App\Models\Manufacturer;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Manufacturer $manufacturer)
    {
        $data = $request->validated();
        $manufacturer->update($data);
        return view('manufacturer.show', compact('manufacturer'));
    }
}
