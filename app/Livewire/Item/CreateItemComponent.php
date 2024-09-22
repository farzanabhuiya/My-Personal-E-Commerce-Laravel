<?php

namespace App\Livewire\Item;

use App\Models\Item;
use App\Models\Brand;
use Livewire\Component;
use Nette\Utils\Random;
use App\Models\Categorie;
use Illuminate\Support\Str;
use App\Models\Subcategorie;
use Livewire\WithFileUploads;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreateItemComponent extends Component
{

    use WithFileUploads; 
    use SlugGenerator;
    public $categorie_id="";
    public $subcategorie_id="";
    public $brand_id="";
    public $name="";
    public $slug="";
    public $images=[];
  



    function addItem(){
   $this->validate([
 
     'name'=> 'required|max:20',
     'categorie_id' =>'required',
     'subcategorie_id' =>'required',
     'brand_id' =>'required'

    

   ]);
   $itemPhotos =[];
 foreach ($this->images as $image) {
    $fileName = Str::random(10).'.'.$image->extension(); 
    $image->storeAs('ItemImage',$fileName,'public');
    $itemPhotos[]=$fileName;  
}
    $items = new Item();
    $items->categorie_id = $this->categorie_id;
    $items->subcategorie_id = $this->subcategorie_id;
    $items->brand_id = $this->brand_id;
    $items->name = $this->name;
    $items->slug=$this->generateslug($this->name,Item::class);
    $items->image = json_encode($itemPhotos);
    $items->save();
    $this->reset();
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
