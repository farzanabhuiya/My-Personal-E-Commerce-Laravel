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
    public $search;


    // public function mount(){
    //     $this->items= Item::all();
    // }


    

    public function render()
    {
        if(! $this->search){
            $this->items =Item::latest()->paginate(5)->all(); 
        }else{
            $this->items =Item::where('name', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.item.list-item-componenet');
    }
}
