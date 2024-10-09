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
   //blic $products = [];
    public $brands=[];
   // public $selectedBrands = [];
    public $subcategoryProducts;


    public function mount($slug){
        $this->categorie= Categorie::orderBy('name','ASC')->with('Subcategorie')->where('showhome','Yes')->get();
        $this->FutureProducts=Product::orderBy('id','DESC')->where('is_featured','Yes')->get();
       // $this->products = Product::with('brands')->get(); 
        $this->cartCount=Cart::count();
        $this->brands = Brand::get();
        //$this->subcategoryProducts=Product::with('Subcategorie')->get();
        $this->subcategoryProducts =Subcategorie::with('Product')->where('slug',$slug)->get();
    }



    //   public function updatedSelectedBrands()
    //    {
    //     if (!empty($this->selectedBrands)) {
    //         $this->products = Product::whereIn('brand_id', $this->selectedBrands)->get();
    //     } else {
    //         // If no brand is selected, show all products
    //         $this->products = Product::with('brands')->get();
    //     }


    public function render()
    {
       // dd($this->subcategoryProducts);
        return view('livewire.frontend.productsubcategory-component');
    }
}
