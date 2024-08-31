<?php

namespace App\Livewire\Productcolour;

use App\Models\Productcolour;
use Livewire\Component;

class ListProductcolourComponent extends Component
{


    
    public $productcolours="";
    public function mount()
    {
        $this->productcolours = Productcolour::all();
    }

    public function render()
    {
        return view('livewire.productcolour.list-productcolour-component');
    }
}
