<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeaddress extends Model
{
    use HasFactory;

    public function scopeStore($query,$store)
{
    return $query->where('store_id', '=', $store);
}

public function scopeCity($query,$city)
{
    return $query->where('city_id', '=', $city);
}
}
