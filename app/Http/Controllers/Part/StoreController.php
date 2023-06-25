<?php

namespace App\Http\Controllers\Part;

use App\Http\Requests\Part\StoreRequest;
use App\Models\Part;

class StoreController extends PartBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('part.index');
    }
}
