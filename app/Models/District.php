<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'district_name',
        'district_code',
       
    ];


    public function shipping()
    {
        return $this->hasOne(Shipping::class); 
    }
//     function Shipping(){
//         return $this->hasMany(Shipping::class);
//     }
 }
