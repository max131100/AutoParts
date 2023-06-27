<?php

namespace App\Http\Controllers\User\Part;

use App\Http\Controllers\Controller;
use App\Http\Filters\PartFilter;
use App\Http\Requests\Part\FilterRequest;
use App\Models\CarPart;
use App\Models\Part;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request) {
        $data = $request->validated();
        $filter = app()->make(PartFilter::class, ['queryParams' => array_filter($data)]);
        $parts = Part::filter($filter)->paginate(12);
        return view('main.part.index', compact('parts'));
    }
}
