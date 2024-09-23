<?php

namespace App\Livewire\Productcolour;

use App\Models\Productcolour;
use Livewire\Component;

class ListProductcolourComponent extends Component
{


    public $search;
    public $productcolours="";
    // public function mount()
    // // {
    // //     $this->productcolours = Productcolour::all();
    // // }

    public function render()
    {

        if(! $this->search){
            $this->productcolours =Productcolour::latest()->paginate(7)->all(); 
        }else{
            $this->productcolours = Productcolour::where('colour', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.productcolour.list-productcolour-component');
    }
}
