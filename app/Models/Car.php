<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cars';
    protected $guarded = false;


    public function make() {
        return $this->belongsTo(CarMake::class, 'make_id', 'id');
    }

    public function model() {
        return $this->belongsTo(CarModel::class, 'model_id', 'id');
    }

    public function parts() {
        return $this->belongsToMany(CarPart::class, 'car_parts', 'car_id', 'part_id');
    }
}
