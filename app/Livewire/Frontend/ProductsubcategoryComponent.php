<?php

namespace App\Livewire\Frontend;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductsubcategoryComponent extends Component
{

   
    public $categorie;
     public $FutureProducts;
    public $cartCount;
    public $products = [];
    public $brands=[];
    public $selectedBrands = [];
    public $subcategoryProducts;
     ///discount
     public $selectedDiscounts = [10,30];
        
    public function mount($slug){
        $this->categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $this->FutureProducts=Product::orderBy('id','DESC')->where('is_featured','Yes')->get();
        $this->products = Product::with('brand')->get(); 
        $this->cartCount=Cart::count();
        $this->brands = Brand::get();
        //$this->subcategoryProducts=Product::with('Subcategorie')->get();
        $this->subcategoryProducts =Subcategorie::where('slug',$slug)->with('Product')->get();
    }

      public function updatedSelectedBrands()
       {
        if (!empty($this->selectedBrands)) {
            $this->products = Product::whereIn('brand_id', $this->selectedBrands)->get();
        } else {
            // If no brand is selected, show all products
            $this->products = Product::with('brand')->get();
        }
    }

    public function render()
    {
       //dd($this->subcategoryProducts);
           // প্রোডাক্ট ফিল্টার করার লজিক
           $discounts = Product::when($this->selectedDiscounts, function ($query) {
            foreach ($this->selectedDiscounts as $discount) {
                $query->orWhereBetween('discount_amount', [$discount, $discount]);
            }
        })->get();

 //dd($discounts);
        return view('livewire.frontend.productsubcategory-component', [
            'discounts' => $discounts,
        ]);
    }
}
