<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class ListBrandComponent extends Component
{
    public $search;
    public $brands;
    // public function mount()
    // {
    //     $this->brands = Brand::all();
    // }

    public function render()
    {

        if(! $this->search){
            $this->brands =Brand::latest()->paginate(3)->all(); 
        }else{
            $this->brands = Brand::where('name', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.brand.list-brand-component');
    }
}
