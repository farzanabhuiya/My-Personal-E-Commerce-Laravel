<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function Brand(){
        return $this->hasMany(Brand::class);
    }

    function comments(){
        return $this->hasMany(Comment::class)->with('user:id,name,profile_img');
    }
}
