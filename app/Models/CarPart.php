<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class CarPart extends Model
{
    use HasFactory;

    protected $table = 'car_parts';
    protected $guarded = false;
}
