<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class ListBrandComponent extends Component
{

    public $brands;
    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function render()
    {
        return view('livewire.brand.list-brand-component');
    }
}
