<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    function Customeraddersse(){
        return $this->belongsTo(Customeraddersse::class);
    }


    function order(){
        return $this->belongsTo(Order::class);
    }

///thanks page jonno relation ta kora
    public function product() {
        return $this->belongsTo(Product::class);
    }

    function orders(){
        return $this->hasMany(Order::class);
    }
    
}
