<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class ListBrandComponent extends Component
{
    public $search='';
   public $paginate=15;
    // public function mount()
    // {
    //     $this->brands = Brand::all();
    // }

    public function toggleStatus($id)
    {
       $Brand = Brand::find($id);  
       if ($Brand) {
          
           $Brand->update(['status' => $Brand->status == 1 ? 0 : 1]);
           
       
           $this->dispatch('toast', ['success' => 'Status updated successfully!']);
           
           
       }
    }










    public function render()
    {
        $brands = Brand::query()
        ->where('name', 'like', '%' . $this->search . '%') 
        ->orWhere('slug', 'like', '%' . $this->search . '%') 
        ->paginate($this->paginate);
        
        return view('livewire.brand.list-brand-component',[
            'brands' => $brands,
        ]);
    }
}
