<?php

namespace App\Livewire\Frontend;

use App\Models\Item;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ItemallComponent extends Component
{


    public $cartCount;
    //blic $products = [];
     public $items=[];
     public $itemProducts;
 
 
     public function mount($slug){
        
         $this->cartCount=Cart::count();
         $this->items = Item::get();
        $this->itemProducts =Item::with('product')->where('slug',$slug)->get();
     }





    public function render()
    {
        return view('livewire.frontend.itemall-component');
    }
}
