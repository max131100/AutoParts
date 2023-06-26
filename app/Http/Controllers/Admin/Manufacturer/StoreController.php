<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\StoreRequest;
use App\Models\Manufacturer;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Manufacturer::firstOrCreate($data);
        return redirect()->route('admin.manufacturer.index');
    }
}
