<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart(Request $request){
        $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $cartContents = Cart::content();
      

        //dd($cartContents);
         return view('frontend.contant.Cart',compact('categorie','cartContents'));
    }


    public function AddToCart(Request $request){
       
    //   dd($request->all());
    //return $request->all();

    //   if(Auth::check()==false){
    //     return redirect()->route('login');

    //   }
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
                    Cart::add(['id'=>$product->id, 'name' => $product->title, 'qty' =>1, 'price' =>$product->price,'options' =>[$product->image]]);
                
                     $cartCount=Cart::count();
                    $status=true;
                    $message = 'Product add in Card';
                }else{
                   
                    $status=false;
                    $message = 'Product all ready exist';
                }
            }
           

        }else{
            Cart::add(['id'=>$product->id, 'name' => $product->title, 'qty' =>1, 'price' =>$product->price,'options' =>[$product->image]]);
            $cartCount=Cart::count();
           $status=true;
           $message = 'Product add in Card';
        }

        return response()->json([
            'status' =>$status,
            'message' => $message ,
            'cartCount' =>$cartCount,
        ]);

    }

 public function UpdateCart(Request $request){
    $rowId= $request->rowId;
    $qty = $request->qty;
    Cart::update($rowId,$qty);
  
    $message = 'Card Update Successfully';
    session()->flash('success',$message );

    return response()->json([
        'status' =>true,
        'message' => $message,
    ]);

 }

 public function delete($rowId){

    Cart::remove($rowId);
    return back();
    
 }

}
