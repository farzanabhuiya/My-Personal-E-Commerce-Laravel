<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class BrandAllController extends Controller
{
    public function Branddall(Request $request,$slug){

        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $cartCount=Cart::count();
        return view('frontend.contant.BranddAll',compact('categorie','slug','cartCount'));
    }
}
