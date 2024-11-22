<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        "first_name",
        "last_name",
        // "state",
        "address",
        "city",
        "zip_code",
        "phone",
        "email",
        "price",
        "user_id",
        "status",
    ];

    public $timestamps = true;
}
