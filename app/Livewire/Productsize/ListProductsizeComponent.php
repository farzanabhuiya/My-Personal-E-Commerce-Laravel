<?php

namespace App\Livewire\Productsize;

use App\Models\Productsize;
use Livewire\Component;

class ListProductsizeComponent extends Component
{
    public $search=''; 
    

    public function mount()
    {
        // $this->productsizes = Productsize::select('id','size')->latest()->get();
    }




    public function render()
    {
        $productsizes = Productsize::query()->select('id','size')
        ->where('size', 'like', '%' . $this->search . '%')->paginate(6);

        return view('livewire.productsize.list-productsize-component',[
            'productsizes' => $productsizes,
        ]);
    }
}