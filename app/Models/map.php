<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    use HasFactory;

    public function scopeIframStore($query, $store)
    {
        return $query->where('store_id', '=', $store);
    }

    public function scopeIframCity($query, $city)
    {
        return $query->where('city_id', '=', $city);
    }
}
