<?php

namespace App\Services\Part;

use App\Models\Part;

class Service
{
    public function store($data) {
        $cars = $data['compatible_cars'];
        unset($data['compatible_cars']);
        $part = Part::create($data);
        $part->cars()->attach($cars);
    }

    public function update($data, $part) {
        $cars = $data['compatible_cars'];
        unset($data['compatible_cars']);
        $part->update($data);
        $part->cars()->sync($cars);
    }
}
