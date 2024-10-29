<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function customerAddress()
    {
        return $this->belongsTo(Customeraddersse::class, 'customeraddersse_id'); // adjust the foreign key name if different
    }
}
