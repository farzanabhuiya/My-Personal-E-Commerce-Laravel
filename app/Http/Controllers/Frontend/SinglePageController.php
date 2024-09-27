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
     $products=Product::withCount('comments as totalComments')->with('comments','rattings')
        ->withCount('rattings')->withSum('rattings','rating')
        ->with(['user:id,name,profile_img'])
        ->where('slug',$slug)->where('is_featured','Yes')->where('status',1)->get();
       
            $data['categorie'] = $categorie;
            $data['products'] = $products;
      
        return view('frontend.contant.singlePage',$data);
        
    }
}
