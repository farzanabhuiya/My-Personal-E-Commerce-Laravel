<?php

namespace App\Livewire\Categorie;

use App\Models\Categorie;
use Livewire\Component;

class ShowAll extends Component
{

     public $categories;
    public function mount()
    {
        $this->categories = Categorie::all();
    }



    public function render()
    {
        return view('livewire.categorie.show-all');
    }
}
