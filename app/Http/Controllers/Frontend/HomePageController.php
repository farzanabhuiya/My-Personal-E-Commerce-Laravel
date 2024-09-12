<?php

namespace App\Http\Controllers\Frontend;

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

        // dd($products);
        $latestproducts=product::orderBy('id','DESC')->where('status',1)->latest()->take(8)->get();
        return view('frontend.contant.homepage',compact('categorie','products','latestproducts'));
    }
}
