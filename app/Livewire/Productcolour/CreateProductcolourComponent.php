<?php

namespace App\Livewire\Productcolour;

use App\Models\Productcolour;
use Livewire\Component;

class CreateProductcolourComponent extends Component
{


    
    public $colour="";



   public function productcolour(){
   $this->validate([
 
     'colour'=> 'required|max:8|unique:productcolours',
     

   ]);
    $productcolour = new Productcolour();
  
    $productcolour->colour= $this->colour;
    $productcolour->save();
    $this->reset();
    return back()->with('success','ProductColour Successfull Create');
    

    }
    public function render()
    {
        return view('livewire.productcolour.create-productcolour-component');
    }
}