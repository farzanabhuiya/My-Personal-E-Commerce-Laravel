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
    public $subcategorie_id=1;
    public $brand_id="";
    public $name="";
    public $status=1;
    public $slug="";
    public $images=[];
    
     
    
  


    public function mount($Categorie,$SubCategorie,$Brand){
      
      $this->categorie_id = $Categorie->first()->id ?? null;
      // $this->subcategorie_id = $SubCategorie->first()->id ?? null;
      $this->brand_id = $Brand->first()->id ?? null;
      
      
      
    }
    
    

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
    $items->status = $this->status;
    $items->slug=$this->generateslug($this->name,Item::class);
    $items->image = json_encode($itemPhotos);
    $items->save();
    $this->reset();
    $this->dispatch('toast',message:'Data stored successfully!');
    return back();
    

    }


    public function render()
    {
        $subcategories = Subcategorie::with('categorie')->get();
        $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        $brands = Brand::latest()->get();
        return view('livewire.item.create-item-component',compact('categories','subcategories','brands'));
    }
}