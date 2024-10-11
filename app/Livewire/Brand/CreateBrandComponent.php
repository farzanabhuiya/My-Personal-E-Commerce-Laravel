<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use Livewire\WithFileUploads;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreateBrandComponent extends Component
{

    use WithFileUploads;
    use SlugGenerator;
    public $categorie_id="";
    public $subcategorie_id=1;
    public $name="";
    public $slug="";
    public $image;
    public $status="1";


    public function mount($categories){
        
      $this->categorie_id = $categories->first()->id ?? null;
      
    }

    function addBrand(){
   $this->validate([
 
     'name'=> 'required|max:20|unique:brands',
     'status'=>'required',
      'image'=>'required',
      'categorie_id'=>'required',
      'subcategorie_id'=>'required',
    

   ]);
   
   

    // dd($this->image);
      $fileName = time().'.'.$this->image->extension(); 
      
       $this->image->storeAs('BrandImage',$fileName,'public');
       
    $brand = new Brand();
    $brand->categorie_id = $this->categorie_id;
    $brand->subcategorie_id = $this->subcategorie_id;
    $brand->name = $this->name;
    $brand->slug=$this->generateslug($this->name,Brand::class);
    $brand->image = $fileName;
    // $brand->image = json_encode($Photos);
    $brand->status = $this->status;
    $brand->save();
    $this->reset();
    $this->dispatch('toast',message:'Data stored successfully!');
    return back()->with('success','Brand Successfull Create');
    

    }


    public function render()
    {
       $subcategories = Subcategorie::with('categorie')->get();
      $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('livewire.brand.create-brand-component',compact('categories','subcategories'));
    }
}