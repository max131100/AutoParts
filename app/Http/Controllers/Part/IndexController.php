<?php

namespace App\Http\Controllers\Part;

use App\Models\Part;

class IndexController extends PartBaseController
{
    public function __invoke()
    {
        $parts = Part::all();
        return view('part.index', compact('parts'));
    }

}
