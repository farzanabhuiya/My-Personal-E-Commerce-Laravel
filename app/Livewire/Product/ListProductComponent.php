<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListProductComponent extends Component
{

    use WithPagination;
    // public $products;
  
   public $paginate=15;
    public $status ; 

    public $search='';
    
    public function mount(){
        
        
        
    }
    
    
    
    public function toggleStatus($id){
        
        $product = Product::find($id);
        
        if($product != null){
            
            $this->status = $product ->status;
            
            
            $product->update(['status' => $product->status == 1 ? 0 : 1]);
            
        
            $this->dispatch('toast', ['success' => 'Status updated successfully!']);
            
        }
        
        
        
        
    }



// ============DELETE PRODUCT===============//



    
    
    
    
    public function render()
    {
        $products = Product::query()
            ->where('title', 'like', '%' . $this->search . '%') 
            ->orWhere('description', 'like', '%' . $this->search . '%') 
            ->paginate($this->paginate); 
        
      
        
        return view('livewire.product.list-product-component',[
            'products' =>  $products ,
        ]);
    }
}