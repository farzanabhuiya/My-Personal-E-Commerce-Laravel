<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ListItemComponenet extends Component
{
   
    
    public $search='';


    // public function mount(){
    //     $this->items= Item::all();
    // }


    

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
