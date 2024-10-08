<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class SinglePageController extends Controller
{  


    public function singlePage(Request $request,$slug){
    
     $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
     $cartCount=Cart::count();
     $product=Product::withCount('comments as totalComments')->with('comments')
        ->withCount('rattings')->withSum('rattings','rating')->with('rattings')
        ->with(['user:id,name,profile_img'])
        ->where('slug',$slug)->where('is_featured','Yes')->where('status',1)->first();
       

        $relatedproducts=[];
        if($product->related_products != ''){
          $productArray = explode(',',$product->related_products);
          $relatedproducts = product::whereIn('id',$productArray)->get();
    
        }
    

            $data['categorie'] = $categorie;
            $data['cartCount'] = $cartCount;
            $data['product'] = $product;
            $data['relatedproducts']= $relatedproducts;
      
        return view('frontend.contant.singlePage',$data);
        
    }
}
