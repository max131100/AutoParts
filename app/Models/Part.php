<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin Builder
 */
class Part extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'parts';
    protected $guarded = false;

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function cars() {
        return $this->belongsToMany(Car::class, 'car_parts', 'part_id', 'car_id');
    }

    public function carts() {
        return $this->belongsToMany(Cart::class, 'cart_parts', 'part_id', 'cart_id');
    }
}
