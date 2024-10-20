<?php

namespace App\Livewire\Frontend;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use App\Models\Categorie;
use App\Models\Subcategorie;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductsubcategoryComponent extends Component
{


    public $categorie;
    public $FutureProducts;
    public $cartCount;
    public $products = [];
    public $brands = [];
    public $selectedBrands = [];
    public $subcategoryProducts;

    #[Url]
    public $selectedDiscounts = [];
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;

        $this->categorie = Categorie::orderBy('name', 'ASC')->with('Subcategorie')->where('showhome', 'Yes')->get();
        $this->FutureProducts = Product::orderBy('id', 'DESC')->where('is_featured', 'Yes')->get();
        $this->products = Product::with('brand')->get();
        $this->cartCount = Cart::count();
        $this->brands = Brand::get();
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


        // when selectedDiscounts is not null or user  click a discount then if block is run and selectedDiscounts is null then else block is run

        if (!empty($this->selectedDiscounts)) {

            $minDiscount = 1;
            $maxDiscount = max($this->selectedDiscounts) + 1;


            $this->subcategoryProducts = Subcategorie::with(['product' => function ($query) use ($minDiscount, $maxDiscount) {

                $query->whereBetween('discount_amount', [$minDiscount, $maxDiscount]);
            }])
                ->where('slug', $this->slug)
                ->first();
        } else {
            $this->subcategoryProducts = Subcategorie::with('product')->where('slug', $this->slug)->first();
        }



        return view('livewire.frontend.productsubcategory-component', []);
    }
}
