<?php

namespace App\Http\Controllers\Admin\Manufacturer;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;


class DeleteController extends Controller
{
    public function __invoke(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('admin.manufacturer.index');
    }
}
