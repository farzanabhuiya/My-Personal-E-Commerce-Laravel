<?php

namespace App\Livewire\Userdashboard;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCart extends Component
{
    public function render()
    {

        $cartContents = Cart::content();
        return view('livewire.userdashboard.shopping-cart',compact('cartContents'));
    }
}
