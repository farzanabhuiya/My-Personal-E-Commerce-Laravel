<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'status',
    ];
    
      /// subcategory sathe product relation
    function Subcategorie(){
        return $this->belongsTo(Subcategorie::class);
    }
    

        /// brand sathe product relation/akta brand upor onek product
        function brand(){
            return $this->belongsTo(Brand::class);
        }
















    // function brand(){
    //     return $this->hasMany(Brand::class);
    // }


    function user(){
        return $this->belongsTo(User::class);
    }

    function comments(){
        return $this->hasMany(Comment::class)->where('parent_id',null)->with('user:id,name,profile_img')->with('replies');
    }


    public function rattings()
    {
        return $this->hasMany(Ratting::class);
    }


//     public function brands()
// {
//     return $this->belongsTo(Brand::class, 'brand_id');
// }
}