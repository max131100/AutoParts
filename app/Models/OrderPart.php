<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPart extends Model
{
    use HasFactory;

    protected $table = 'order_parts';
    protected $guarded = false;
}
