<?php

namespace App\Livewire\Subcategorie;

use Livewire\Component;
use App\Models\Subcategorie;

class ListSubcategoryComponent extends Component
{

    public $subcategories;
    public function mount()
    {
        $this->subcategories = Subcategorie::all();
    }

    public function render()
    {
        return view('livewire.subcategorie.list-subcategory-component');
    }
}
