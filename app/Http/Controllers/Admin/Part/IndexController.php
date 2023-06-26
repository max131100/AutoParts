<?php

namespace App\Http\Controllers\Admin\Part;

use App\Models\Part;

class IndexController extends PartBaseController
{
    public function __invoke()
    {
        $parts = Part::all();
        return view('admin.part.index', compact('parts'));
    }

}
