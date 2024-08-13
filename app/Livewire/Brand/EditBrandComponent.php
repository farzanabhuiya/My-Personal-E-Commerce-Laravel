<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Categorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class EditBrandComponent extends Component
{



       
    use SlugGenerator;
    public $id;
    public $categorie_id="";
    public $subcategorie_id="";
    public $name="";
    public $slug="";
    public $status="1";




    public function mount($id){
        $brands = Brand::find($id);
        $this->id= $brands->id;
        $this->categorie_id= $brands->categorie_id;
        $this->subcategorie_id= $brands->subcategorie_id;
        $this->name= $brands->name;
        $this->slug= $brands->slug;
        $this->status= $brands->status;

        
    }

    public function UpdateaddBrand($id){
        $this->validate([
 
            'name'=> 'required|max:12',
            'status'=>'required',
          
       
          ]);
          $brands = Brand::find($id);
          $brands->categorie_id = $this->categorie_id;
          $brands->subcategorie_id = $this->subcategorie_id;
          $brands->name = $this->name;
          $brands->slug=$this->generateslug($this->name,Brand::class);
          $brands->status = $this->status;
          $brands->save();
          return back()->with('success','Brand Successfull Update');
         
          }

    


    public function render()
    {
        $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('livewire.brand.edit-brand-component',compact('categories'));
    }
}
