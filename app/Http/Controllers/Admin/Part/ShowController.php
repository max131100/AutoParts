<?php

namespace App\Http\Controllers\Admin\Part;

use App\Models\Part;

class ShowController extends PartBaseController
{
    public function __invoke(Part $part)
    {
        return view('admin.part.show', compact('part'));
    }
}
