<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        "name",
        "image",
        "price",
        "description",
        "type"
    ];

    public $timestamps = true;
}
