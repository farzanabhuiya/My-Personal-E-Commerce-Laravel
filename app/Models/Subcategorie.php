<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorie extends Model
{
    use HasFactory;
    
   
    
    protected $fillable = [
        'status',
       
    ];
    
    

    function categorie(){
        return $this->belongsTo(Categorie::class);
    }
     /// product sathe Subcategorie relation
    function Product(){
        return $this->hasMany(Product::class);
    }
 
}