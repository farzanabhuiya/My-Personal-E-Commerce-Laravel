<?php

namespace App\Livewire\Subcategorie;

use Livewire\Component;
use App\Models\Subcategorie;

class ListSubcategoryComponent extends Component
{
    public $search='';
    public function mount()
    {
      
    }

    public function render()
    {


        $subcategories = Subcategorie::query()
        ->where('name', 'like', '%' . $this->search . '%')->paginate(6);
        return view('livewire.subcategorie.list-subcategory-component',[
            'subcategories' => $subcategories,
        ]);
    }
}
