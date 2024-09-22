<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{


    public function homePage(){
         $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        //  dd($categorie);
         $products=Product::orderBy('id','DESC')->where('is_featured','Yes')->where('status',1)->get();
         $latestproducts=product::orderBy('id','DESC')->where('status',1)->latest()->take(6)->get();
         $brands = Brand::get();
         $items = Item::get();
        return view('frontend.contant.homepage',compact('categorie','products','latestproducts','brands','items'));
    }
}