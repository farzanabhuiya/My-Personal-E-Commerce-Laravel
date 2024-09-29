<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    
    
    protected $fillable = [
        'status',
       
    ];
    

    
    function Subcategorie(){
        return $this->hasMany(Subcategorie::class);
    }
    function Brand(){
        return $this->hasMany(Brand::class);
    }
    function Item(){
        return $this->hasMany(Item::class);
    }
}