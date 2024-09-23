<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;

class Search extends Component
{




//    public $search="";
//    public $categories="";

    // public function updatedQuery()
    // {
    //     $this->categories = Categorie::where('name', 'like', '%' . $this->search . '%')->get();
    // }


    // public function render()
    //     {
            
    //         return view('livewire.categorie.search');
    //     }


public $search= "";
    public function render()
    {
        $categorie = Categorie::where('name', 'like', '%'.$this->search.'%')->get();
        return view('livewire.categorie.search');
    }
}    
