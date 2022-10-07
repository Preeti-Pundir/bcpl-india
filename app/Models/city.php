<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    public function scopeStorCity($query,$store)
{
    return $query->where('store_id', '=', $store);
}


}
