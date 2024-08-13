<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreateBrandComponent extends Component
{

   
    use SlugGenerator;
    public $categorie_id="";
    public $subcategorie_id="";
    public $name="";
    public $slug="";
    public $status="1";



    function addBrand(){
   $this->validate([
 
     'name'=> 'required|max:12',
     'status'=>'required',
    

   ]);
    $brand = new Brand();
    $brand->categorie_id = $this->categorie_id;
    $brand->subcategorie_id = $this->subcategorie_id;
    $brand->name = $this->name;
    $brand->slug=$this->generateslug($this->name,Brand::class);
    $brand->status = $this->status;
    $brand->save();
    return back()->with('success','Brand Successfull Create');
    

    }


    public function render()
    {
       $subcategories = Subcategorie::with('categorie')->get();
      $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('livewire.brand.create-brand-component',compact('categories','subcategories'));
    }
}
