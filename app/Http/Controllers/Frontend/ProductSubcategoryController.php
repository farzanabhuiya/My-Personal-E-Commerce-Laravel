<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcategorie;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductSubcategoryController extends Controller
{
    public function productSubcategory(Request $request, $slug){
        //dd($product);
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $cartCount=Cart::count();
        //$subcategoryProducts =Subcategorie::where('slug',$slug)->with('product')->get();
        //dd($product);
        return view('frontend.contant.Productsubcategory',compact('categorie','slug','cartCount'));
    }
}
