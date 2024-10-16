<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    
    
    protected $fillable = [
        'status',
        
    ];

    
    
    
    function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    function Subcategorie(){
        return $this->belongsTo(Subcategorie::class);
    }
    function Brand(){
        return $this->belongsTo(Brand::class);
    }

    /// akta item upor onek product relation/item sathe product relation//itemall page
   function product(){
    return $this->hasMany(Product::class);
 }
 
}