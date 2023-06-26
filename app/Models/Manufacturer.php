<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin Builder
 */
class Manufacturer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'manufacturers';
    protected $guarded = false;
}
