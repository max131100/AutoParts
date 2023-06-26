<?php

namespace App\Http\Controllers\Admin\Part;

use App\Models\Part;

class DeleteController extends PartBaseController
{
    public function __invoke(Part $part)
    {
        $part->cars()->detach();
        $part->delete();
        return redirect()->route('admin.part.index');
    }
}
