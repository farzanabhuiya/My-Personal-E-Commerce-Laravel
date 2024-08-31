<?php

namespace App\Livewire\Productsize;

use App\Models\Productsize;
use Livewire\Component;

class ListProductsizeComponent extends Component
{
     
    public $productsizes='';
    public function mount()
    {
        $this->productsizes = Productsize::all();
    }



    public function render()
    {
        return view('livewire.productsize.list-productsize-component');
    }
}
