<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';
    protected $guarded = false;

    public function make() : BelongsTo
    {
        return $this->belongsTo(CarMake::class, 'car_make_id', 'id');
    }
}
