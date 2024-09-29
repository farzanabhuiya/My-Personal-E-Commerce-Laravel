<?php

namespace App\Livewire\Productcolour;

use App\Models\Productcolour;
use Livewire\Component;

class ListProductcolourComponent extends Component
{


    public $search ='';
   
    // public function mount()
    // // {
    // //     $this->productcolours = Productcolour::all();
    // // }

    public function render()
    {


        $productcolours = Productcolour::query()
        ->where('colour', 'like', '%' . $this->search . '%')
        ->paginate(6);

    
        return view('livewire.productcolour.list-productcolour-component',[
            'productcolours' => $productcolours,
        ]);
    }
}
