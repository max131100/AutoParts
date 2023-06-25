<?php

namespace App\Http\Controllers\Part;

use App\Models\Part;

class ShowController extends PartBaseController
{
    public function __invoke(Part $part)
    {
        return view('part.show', compact('part'));
    }
}
