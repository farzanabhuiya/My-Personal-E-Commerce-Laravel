<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ListItemComponenet extends Component
{
    // public $categorie_id="";
    // public $subcategorie_id="";
    // public $brand_id="";
    public $items="";
    


    public function mount(){
        $this->items= Item::all();
    }


    

    public function render()
    {
        return view('livewire.item.list-item-componenet');
    }
}
