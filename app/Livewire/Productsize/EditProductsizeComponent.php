<?php

namespace App\Livewire\Productsize;

use Livewire\Component;
use App\Models\Productsize;

class EditProductsizeComponent extends Component
{



    public $id;
    public $size="";
    

    function mount($id){
         $productsize= Productsize::find($id);
         $this->id =$productsize->id;
         $this->size = $productsize->size;
    




    }

    function UpdateSize($id){
        $this->validate([
 
            'size'=> 'required|max:5',
          
       
          ]);
    $productsize =Productsize::find($id);
        
    $productsize->size= $this->size;
    $productsize->save();
    $this->reset();
    return back()->with('success','ProductSize Successfull Update');
    }




    public function render()
    {
        return view('livewire.productsize.edit-productsize-component');
    }
}
