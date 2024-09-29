<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ListItemComponenet extends Component
{
   
    public $status ; 
    public $search='';


    // public function mount(){
    //     $this->items= Item::all();
    // }

    public function toggleStatus($id){
        
        $item = Item::find($id);
        
        if($item != null){
            
            $this->status = $item->status;
            
            
            $item->update(['status' => $item->status == 1 ? 0 : 1]);
            
        
            $this->dispatch('toast', ['success' => 'Status updated successfully!']);
            
        }
        
        
        
        
    }

    

    public function render()
    {
        $items = Item::query()
        ->where('name', 'like', '%' . $this->search . '%') 
        ->orWhere('slug', 'like', '%' . $this->search . '%') 
        ->paginate(6);
        
        return view('livewire.item.list-item-componenet',[
            'items' => $items,
        ]);
    }
}