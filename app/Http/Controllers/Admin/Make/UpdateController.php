<?php

namespace App\Http\Controllers\Admin\Make;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\UpdateRequest;
use App\Models\CarMake;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CarMake $make)
    {
        $data = $request->validated();
        $make->update($data);
        return view('admin.make.show', compact('make'));
    }
}
