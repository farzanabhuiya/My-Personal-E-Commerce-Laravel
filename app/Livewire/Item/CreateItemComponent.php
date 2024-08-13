<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Http\Controllers\Helpers\SlugGenerator;
use App\Models\Brand;

class CreateItemComponent extends Component
{

      
    use SlugGenerator;
    public $categorie_id="";
    public $subcategorie_id="";
    public $brand_id="";
    public $name="";
    public $slug="";
  



    function addItem(){
   $this->validate([
 
     'name'=> 'required|max:12',
     'categorie_id' =>'required',
     'subcategorie_id' =>'required',
     'brand_id' =>'required'

    

   ]);
    $items = new Item();
    $items->categorie_id = $this->categorie_id;
    $items->subcategorie_id = $this->subcategorie_id;
    $items->brand_id = $this->brand_id;
    $items->name = $this->name;
    $items->slug=$this->generateslug($this->name,Item::class);
    $items->save();
    return back()->with('success','Item Successfull Create');
    

    }




    public function render()
    {
        $subcategories = Subcategorie::with('categorie')->get();
        $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        $brands = Brand::latest()->get();
        return view('livewire.item.create-item-component',compact('categories','subcategories','brands'));
    }
}
