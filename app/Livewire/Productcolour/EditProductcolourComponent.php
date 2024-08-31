<?php

namespace App\Livewire\Productcolour;

use App\Models\Productcolour;
use Livewire\Component;

class EditProductcolourComponent extends Component
{



 

    public $id;
    public $colour="";
    

    function mount($id){
         $productcolour= Productcolour::find($id);
         $this->id =$productcolour->id;
         $this->colour = $productcolour->colour;
    




    }

    function UpdateColour($id){
        $this->validate([
 
            'colour'=> 'required|max:8',
          
       
          ]);
    $productcolour =Productcolour::find($id);
        
    $productcolour->colour = $this->colour;
    $productcolour->save();
    $this->reset();
    return back()->with('success','ProductColour Successfull Update');
    }


    public function render()
    {
        return view('livewire.productcolour.edit-productcolour-component');
    }
}
