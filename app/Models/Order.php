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

    // function OrderItem (){
    //     return $this->hasMany(OrderItem::class);
    //  }


  ///thanks page jonno relation ta kora
     public function orderitems() {
        return $this->hasMany(OrderItem::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
    function OrderItem(){
        return $this->belongsTo(OrderItem::class);
    }

            // order sathe user relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
