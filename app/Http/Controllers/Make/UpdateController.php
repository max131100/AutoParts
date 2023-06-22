<?php

namespace App\Http\Controllers\Make;

use App\Http\Controllers\Controller;
use App\Http\Requests\Make\UpdateRequest;
use App\Models\CarMake;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CarMake $make)
    {
        $data = $request->validated();
        $make->update($data);
        return view('make.show', compact('make'));
    }
}
