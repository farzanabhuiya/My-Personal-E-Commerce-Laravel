<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SinglePageController extends Controller
{
    public function singlePage(Request $request,$slug){
        // dd($slug);
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $products=Product::withCount('comments as totalComments')->with('comments')
        ->where('slug',$slug)->where('is_featured','Yes')->where('status',1)->get();
        return view('frontend.contant.singlePage',compact('categorie','products'));
        
    }
}
