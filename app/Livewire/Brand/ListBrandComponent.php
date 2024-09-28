<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class ListBrandComponent extends Component
{
    public $search='';
   
    // public function mount()
    // {
    //     $this->brands = Brand::all();
    // }

    public function render()
    {
        $brands = Brand::query()
        ->where('name', 'like', '%' . $this->search . '%') 
        ->orWhere('slug', 'like', '%' . $this->search . '%') 
        ->paginate(6);
        
        return view('livewire.brand.list-brand-component',[
            'brands' => $brands,
        ]);
    }
}
