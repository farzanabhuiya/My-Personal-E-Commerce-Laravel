<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SinglePageController extends Controller
{  


    public function singlePage(Request $request,$slug){
    
     $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
     $product=Product::withCount('comments as totalComments')->with('comments')
        ->withCount('rattings')->withSum('rattings','rating')->with('rattings')
        ->with(['user:id,name,profile_img'])
        ->where('slug',$slug)->where('is_featured','Yes')->where('status',1)->first();
       
            $data['categorie'] = $categorie;
            $data['product'] = $product;
      
        return view('frontend.contant.singlePage',$data);
        
    }
}
