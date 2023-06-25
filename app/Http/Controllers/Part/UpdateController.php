<?php

namespace App\Http\Controllers\Part;

use App\Http\Requests\Part\UpdateRequest;
use App\Models\Part;

class UpdateController extends PartBaseController
{
    public function __invoke(UpdateRequest $request, Part $part)
    {
        $data = $request->validated();
        $this->service->update($data, $part);
        return view('part.show', compact('part'));
    }
}
