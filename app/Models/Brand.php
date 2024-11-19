<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        
    ];





    function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    // function Product(){
    //     return $this->belongsTo(Product::class);
    // }




/// akta brand upor onek product relation/brand sathe product relation
   function product(){
   return $this->hasMany(Product::class);
}

}
