<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    function Product(){
        return $this->belongsTo(Product::class);
    }


/// akta brand upor onek product relation/brand sathe product relation
   function products(){
   return $this->hasMany(Product::class);
}
    
//     public function products()
// {
//     return $this->hasMany(Product::class);
// }

}
