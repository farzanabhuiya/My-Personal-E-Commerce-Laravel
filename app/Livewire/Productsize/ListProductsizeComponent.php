<?php

namespace App\Livewire\Productsize;

use App\Models\Productsize;
use Livewire\Component;

class ListProductsizeComponent extends Component
{
     
    public $productsizes='';
    public function mount()
    {
        $this->productsizes = Productsize::select('id','size')->latest()->get();
    }



    public function render()
    {
        return view('livewire.productsize.list-productsize-component');
    }
}