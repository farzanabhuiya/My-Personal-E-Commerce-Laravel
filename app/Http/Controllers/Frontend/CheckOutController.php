<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\District;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Customeraddersse;
use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{
    public function checkout(){
          $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        //   $CustomerAddersse = Customeraddersse::where('user_id',auth()->user()->id)->first();
         $cartContents = Cart::content();
         $cartCount=Cart::count();
         if (Cart::Count() == 0) {
            return redirect()->route('frontend.contant.Cart');
      }
         $districts = District::orderBy('district_name', 'ASC')->get();
          return view('frontend.contant.CheckOut',compact('categorie','districts','cartContents','cartCount'));
  
    }

    function processCheckout(){
        return view('frontend.contant.CheckOut');
    }
   public function thanks(Request $request,$orderId){
     $orderitem = OrderItem::where('order_id', $orderId)->with('product')->with('order')->get();
    
    // dd($orderitem);
     $order = Order::where('id', $orderId)->first();
//    dd($order);

   return view('frontend.contant.thanks',compact('orderId','orderitem','order'));
    }
   
}
