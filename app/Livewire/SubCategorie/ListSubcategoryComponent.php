<?php

namespace App\Livewire\Subcategorie;

use Livewire\Component;
use App\Models\Subcategorie;

class ListSubcategoryComponent extends Component
{
    
    
    
    public $status ; 
    public $search='';
    public function mount()
    {
      
    }

    

    
    public function toggleStatus($id){
        
        $subCategorie = Subcategorie::find($id);
        
        if($subCategorie != null){
            
            $this->status = $subCategorie ->status;
            
            
            $subCategorie->update(['status' => $subCategorie->status == 1 ? 0 : 1]);
            
        
            $this->dispatch('toast', ['success' => 'Status updated successfully!']);
            
        }
        
        
        
        
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