<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ShowAll extends Component
{
     use WithPagination; 
    
     public $search;
     public $categories;
    // public function mount()
    // {
    //     // $categories = Categorie::paginate(5)->all();
    //     $this->categories = Categorie::latest()->paginate(5);
    // }


    
    public function render()
    {  
        
        if(! $this->search){
        $this->categories = Categorie::latest()->paginate(3)->all(); 
    }else{
        $this->categories = Categorie::where('name', 'like', '%'.$this->search.'%')->get();
    }
        return view('livewire.categorie.show-all');
    }
}
