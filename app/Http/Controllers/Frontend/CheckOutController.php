<?php

namespace App\Http\Controllers\Frontend;

use App\Models\District;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Customeraddersse;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{
    public function checkout(){
          $categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
          $CustomerAddersse = Customeraddersse::where('user_id',auth()->user()->id)->first();
         $cartContents = Cart::content();
         $cartCount=Cart::count();
         if (Cart::Count() == 0) {
            return redirect()->route('frontend.contant.Cart');
      }
         $districts = District::orderBy('district_name', 'ASC')->get();
          return view('frontend.contant.CheckOut',compact('categorie','districts','cartContents','cartCount','CustomerAddersse'));
    //   return view('frontend.contant.CheckOut');
    }

    function processCheckout(){
        return view('frontend.contant.CheckOut');
    }

   
}
