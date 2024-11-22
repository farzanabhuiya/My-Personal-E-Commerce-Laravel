<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Item;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Product;
use App\Mail\OrderEmail;
use App\Models\Categorie;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomePageController extends Controller
{
  

    public function homePage(){

    $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        //  dd($categorie);
    $products=Product::orderBy('id','DESC') 
         ->withCount('rattings')->withSum('rattings','rating')->with('rattings')
         ->where('is_featured','Yes')->where('status',1)->with('brand')->get();
        //  dd($products);
     $latestproducts=product::orderBy('id','DESC')->withCount('rattings')
         ->withSum('rattings','rating')->with('rattings')
         ->where('status',1)->latest()->take(6)->get();
         $cartCount=Cart::content();
        //  dd($cartCount);      
         $brands = Brand::get();
         $items = Item::get();
         $pages = Page::get();
        return view('frontend.contant.homepage',compact('categorie','products','latestproducts','cartCount','brands','items','pages'));
    }

    public function page($slug){
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $page = Page::where('slug',$slug)->first();
        $pages =Page::get();
        //dd($pages);
        return view('frontend.contant.page',compact('categorie','page','pages'));
        
    }
}