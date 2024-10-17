<?php

namespace App\Livewire\Frontend;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistComponent extends Component
{

   public $wishlists;
//    public $productId;
//    public $products;

    public function mount()
    {
        
        $this->wishlists = Wishlist::where('user_id', Auth::id())->with('product')->get();
        //dd($this->wishlists);
    }


    public function addWishlist($productId){
       
        $product = Product::find($productId);
        //dd($productId);
        if (!$product) {
            return;
        }

          // Add to wishlist
          Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $productId,
        ]);
         // Refresh the wishlist
         $this->wishlists = Wishlist::where('user_id', Auth::id())->with('product')->get();

    }

    public function render()
    {
     //dd($this->wishlists);
        return view('livewire.frontend.wishlist-component', ['wishlists' => $this->wishlists]);
    }
}
