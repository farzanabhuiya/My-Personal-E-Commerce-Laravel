<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ShowAll extends Component
{
     use WithPagination; 
    
     public $search= '';
   


    public function render()
    {  
        
        $categories = Categorie::query()
        ->where('name', 'like', '%' . $this->search . '%') 
        ->orWhere('slug', 'like', '%' . $this->search . '%') 
        ->paginate(8);
        // $categories = Categorie::where('name', 'like', '%'.$this->search .'%')->paginate(2);
    
        return view('livewire.categorie.show-all',[
            'categories' => $categories,
        ]);
    }
}
