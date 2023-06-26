<?php

namespace App\Http\Controllers\Admin\Part;

use App\Http\Requests\Part\StoreRequest;

class StoreController extends PartBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.part.index');
    }
}
