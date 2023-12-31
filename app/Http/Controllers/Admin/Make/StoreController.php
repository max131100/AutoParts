<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\StoreRequest;
use App\Models\CarMake;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        CarMake::firstOrCreate($data);
        return redirect()->route('admin.make.index');
    }
}
