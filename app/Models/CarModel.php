<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';
    protected $guarded = false;

    public function make() {
        return $this->belongsTo(CarMake::class, 'make_id', 'id');
    }
}
