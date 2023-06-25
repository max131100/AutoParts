<?php

namespace App\Http\Controllers\Part;

use App\Http\Controllers\Controller;
use App\Services\Part\Service;

class PartBaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
