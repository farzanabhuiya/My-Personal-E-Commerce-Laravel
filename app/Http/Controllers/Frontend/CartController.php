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





// =================ADD TO CART ======================//

    public function AddToCart(Request $request){
        $id = $request->id;
        $product = Product::find($id);
    
        if ($product == null) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found',
            ]);
        }
    
        $productAlreadyExist = false;
        foreach (Cart::content() as $item) {
            if ($item->id == $product->id) {
                $productAlreadyExist = true;
                break;
            }
        }
    
        if (!$productAlreadyExist) {
            Cart::add([
                'id' => $product->id, 
                'name' => $product->title, 
                'qty' => 1, 
                'price' => $product->price,
                'options' => ['image' => $product->image]
            ]);
            $status = true;
            $message = 'Product added to cart';
        } else {
            $status = false;
            $message = 'Product already exists in cart';
        }
    
        return response()->json([
            'status' => $status,
            'message' => $message,
            'cartCount' =>count( Cart::content()), 
        ]);
    }
    
// =========================ADD TO CART END=======================//




private function getCartDetails()
{
    return [
        'newSubtotal' => Cart::subtotal(),
        'newTotalPrice' => Cart::total(),
        'cartCount' => Cart::count(),
    ];
}





//==========================CART UPDATE=======================//
public function UpdateCart(Request $request)
{
    $request->validate([
        'rowId' => 'required',
        'qty' => 'required|integer|min:1'
    ]);

    $item = Cart::get($request->rowId);
    $item->qty = $request->qty;
    Cart::update($request->rowId, $request->qty);

    $itemTotal = $item->price * $request->qty;
    
    $cartDetails = $this->getCartDetails();
    return response()->json(array_merge([
        'status' => true,
        'itemTotal' => $itemTotal,
    ], $cartDetails));
}



//  ==========================CART DELETE END==================//



 public function delete( Request $request, $rowId){

    Cart::remove($rowId);
    $cartDetails = $this->getCartDetails();

    return response()->json(array_merge([
        'status' => "delete",
        'message' => 'Deleted successfully',
    ], $cartDetails));
    
 }

}
