<?php

namespace App\Http\Controllers\User\Part;

use App\Http\Controllers\Controller;
use App\Models\Part;

class IndexController extends Controller
{
    public function __invoke() {
        $parts = Part::paginate(12);
        return view('main.part.index', compact('parts'));
    }
}
