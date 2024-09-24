<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    function product(){
        return $this->belongsTo(Product::class);
    }

    function user(){
        return $this->belongsTo(user::class);
    }

}
