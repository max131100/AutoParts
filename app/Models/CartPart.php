<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartPart extends Model
{
    use HasFactory;

    protected $table = 'cart_parts';
    protected $guarded = false;
}
