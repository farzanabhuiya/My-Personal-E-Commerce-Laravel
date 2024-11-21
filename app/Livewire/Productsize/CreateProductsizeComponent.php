<?php

namespace App\Livewire\Productsize;

use App\Models\Productsize;
use Livewire\Component;

class CreateProductsizeComponent extends Component
{


    

    public $size="";



   public function productsize(){
   $this->validate([
 
    'size' => 'required|max:5|unique:productsizes',
     

   ]);
    $productsize = new Productsize();
  
    $productsize->size= $this->size;
    $productsize->save();
    $this->reset();
    $this->dispatch('toast', message:'Data stored successfully!'); 
    return back();
    

    }




    public function render()
    {
        return view('livewire.productsize.create-productsize-component');
    }
}