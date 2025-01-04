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
     public $Show_categorie=10;


     protected $listeners = ['createCtaegorie' => 'refreshList'];
  
    
     public function toggleStatus($id)
     {
        $category = Categorie::find($id);  
        if ($category) {
           
            $category->update(['status' => $category->status == 1 ? 0 : 1]);
            
        
            $this->dispatch('toast', ['success' => 'Status updated successfully!']);
            
            
        }
     }




    public function render()
    {  
        
        $categories = Categorie::query()
        ->where('name', 'like', '%' . $this->search . '%') 
        ->orWhere('slug', 'like', '%' . $this->search . '%') 
        ->latest()
        ->paginate($this->Show_categorie);
        
    
        return view('livewire.categorie.show-all',[
            'categories' => $categories,
        ]);
    }
}