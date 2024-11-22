<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";
    protected $fillable = [
        "pro_id",
        "name",
        "image",
        "price",
        "user_id",
    ];

    public $timestamps = true;
}
