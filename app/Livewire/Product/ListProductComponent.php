<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListProductComponent extends Component
{

    use WithPagination;
    // public $products;
  
   
   

    public $search='';
    
    public function mount(){
        
        
        
    }
    
    
    
    public function render()
    {
        $products = Product::query()
            ->where('title', 'like', '%' . $this->search . '%') 
            ->orWhere('description', 'like', '%' . $this->search . '%') 
            ->paginate(15); 
        
      
        
        return view('livewire.product.list-product-component',[
            'products' =>  $products ,
        ]);
    }
}