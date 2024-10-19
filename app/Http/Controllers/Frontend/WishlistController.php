<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    public function index(Request $request){
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $cartCount=Cart::count();
        $wishlists = Wishlist::where('user_id',Auth::id())->with('product')->get();
       
        return view('frontend.contant.Wishlist',compact('categorie','cartCount','wishlists'));
    }
    

    public function wishlistAdd(Request $request){

         $productId = $request->product_id;
         $product = Product::find($productId);
        //$product = product::where('id',$request->id)->first();
    
        if (!$product) {
            return response()->json([
                'status'=>true,
                'message' => 'Product not found']);
        }

        // Add to wishlist
        Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $productId,
        ]);

       
        return response()->json([
            'status'=>true,
            "message"=>'Product add Your wishlist',

        ]);
    
    }

    
   public function removeWishlist(Request $request){


        Wishlist::where('user_id',Auth::id())->where('product_id',$request->id)->delete();
        return response()->json([
            'status' =>true,
             'message' =>'Wishlist removed success',
            
        ]);
    }

}



