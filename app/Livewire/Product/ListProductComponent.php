<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ListProductComponent extends Component
{


    public $products;
    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.product.list-product-component');
    }
}
