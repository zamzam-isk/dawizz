<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    protected $fillable = [
        "your_name",
        "email",
        "subject",
        "message",
    ];

    public $timestamps = true;
}
