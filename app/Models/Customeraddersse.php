<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customeraddersse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'countrie_id',
        'address',
        'apartment',
        'city',
        'state',
        'zip',
        'notes',
       
    ];
    function OrderItem(){
        return $this->hasMany(OrderItem::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id'); // assuming district_id is the foreign key in Customeraddersse
    }
}
