<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    protected $fillable = [
        "first_name",
        "last_name",
        "date",
        "time",
        "phone",
        "message",
        "user_id",
        "status",
    ];

    public $timestamps = true;
}
