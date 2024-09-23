<?php

namespace App\Livewire\Productsize;

use App\Models\Productsize;
use Livewire\Component;

class ListProductsizeComponent extends Component
{
    public $search; 
    public $productsizes='';
    // public function mount()
    // {
    //     $this->productsizes = Productsize::all();
    // }



    public function render()
    {
        if(! $this->search){
            $this->productsizes =Productsize::latest()->paginate(3)->all(); 
        }else{
            $this->productsizes = Productsize::where('size', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.productsize.list-productsize-component');
    }
}
