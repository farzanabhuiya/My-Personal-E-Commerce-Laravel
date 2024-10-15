<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'subtotal', 'shipping', 'discount', 'grandTotal',
        
    ];

    function OrderItem (){
        return $this->hasMany(OrderItem::class);
     }


  ///thanks page jonno relation ta kora
     public function orderitems() {
        return $this->hasMany(OrderItem::class);
    }

}
