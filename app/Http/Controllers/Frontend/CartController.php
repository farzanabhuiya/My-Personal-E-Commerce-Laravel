<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart(Request $request){
        // return "hiii";
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $cartContents = Cart::content();
         return view('frontend.contant.Cart',compact('categorie','cartContents'));
    }


    public function AddToCart(Request $request){
       

        $id = $request->id;
        $product = Product::find($id);
        

        if($product == null){
            return response()->json([
                'status' =>false,
                'message' =>'product not found',
            ]);
        }

        if( Cart::count()>0){
            $productAlreadyExist =false;
            foreach(Cart::content() as $item){
                if($item->id == $product->id){
                $productAlreadyExist =true;
                }
                if($productAlreadyExist ==false){
                    Cart::add(['id'=>$product->id, 'name' => $product->title, 'qty' =>1, 'price' =>$product->price]);
                    $status=true;
                    $message = 'Product add in Card';
                }else{
                    $status=false;
                    $message = 'Product all ready exist';
                }
            }
           

        }else{
            Cart::add(['id'=>$product->id, 'name' => $product->title, 'qty' =>1, 'price' =>$product->price]);
           $status=true;
           $message = 'Product add in Card';
        }
        return response()->json([
            'status' =>$status,
            'message' => $message ,
        ]);

    }



}
