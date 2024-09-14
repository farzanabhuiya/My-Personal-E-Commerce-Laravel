<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class HomePageController extends Controller
{


    public function homePage(){
         $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        //  dd($categorie);
         $products=Product::orderBy('id','DESC')->where('is_featured','Yes')->where('status',1)->first()->get();
        //  $products = Brand::with('Product')->get();
         //dd($products);
        //  foreach ($products as $product) {
        //     $image = json_decode($product->image); // For each product
        //     // dd($image); // Debug the image (only for the first iteration due to dd())
        // }
        $latestproducts=product::orderBy('id','DESC')->where('status',1)->latest()->take(5)->get();
        return view('frontend.contant.homepage',compact('categorie','products','latestproducts'));
    }
}
