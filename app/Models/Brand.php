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
}
