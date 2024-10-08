<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customeraddersse extends Model
{
    use HasFactory;
    
    function OrderItem(){
        return $this->hasMany(OrderItem::class);
    }
}
