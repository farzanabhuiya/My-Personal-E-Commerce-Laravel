<?php

namespace App\Livewire\Frontend;

use App\Models\Brand;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class BrandallComponent extends Component
{

    


      
  
    public $cartCount;
   //blic $products = [];
    public $brands=[];
    public $brandProducts;


    public function mount($slug){
       
        $this->cartCount=Cart::count();
        $this->brands = Brand::get();
       $this->brandProducts =Brand::with('product')->where('slug',$slug)->get();
    }



    public function render()
    {
        return view('livewire.frontend.brandall-component');
    }
}
