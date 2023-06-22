<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model
{
    use HasFactory;

    protected $table = 'parts';
    protected $guarded = false;

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }
}
