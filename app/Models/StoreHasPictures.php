<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreHasPictures extends Model
{
    use HasFactory;

    public $table=['store_has_pictures'];

    protected $fillable = [
        'store_id',
        'id',
        'image_path',
    ];



    // public function items()
    // {
    //     return $this->hasMany(store::class);
    // }

}
