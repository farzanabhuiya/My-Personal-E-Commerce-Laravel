<?php

namespace App\Livewire\Subcategorie;

use Livewire\Component;
use App\Models\Subcategorie;

class ListSubcategoryComponent extends Component
{
    public $search;
    public $subcategories;
    public function mount()
    {
        // $this->subcategories = Subcategorie::all();
        // $this->subcategories = Subcategorie::where('name', 'like', '%'.$this->search.'%')->get();
    }

    public function render()
    {

        if(! $this->search){
            $this->subcategories =Subcategorie::latest()->paginate(3)->all(); 
        }else{
            $this->subcategories = Subcategorie::where('name', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.subcategorie.list-subcategory-component');
    }
}
