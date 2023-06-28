<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cars';
    protected $guarded = false;


    public function make(): BelongsTo
    {
        return $this->belongsTo(CarMake::class, 'car_make_id', 'id');
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class, 'car_model_id', 'id');
    }

    public function parts(): BelongsToMany
    {
        return $this->belongsToMany(Part::class, 'car_parts', 'car_id', 'part_id');
    }
}
