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


    function user(){
        return $this->belongsTo(User::class);
    }

    function comments(){
        return $this->hasMany(Comment::class)->where('parent_id',null)->with('user:id,name,profile_img')->with('replies');
    }
}
