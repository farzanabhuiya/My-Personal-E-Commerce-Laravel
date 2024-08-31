<?php

namespace App\Livewire\Subcategorie;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subategorie;
use App\Models\Subcategorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class EditSubcategoryComponent extends Component
{



    
    use SlugGenerator;
    public $categorie_id="";
    public $id;
    public $name="";
    public $slug="";
    public $status="";
    public $showhome="";

    function mount($id){
         $subcategorie= Subcategorie::find($id);
         $this->id =$subcategorie->id;
         $this->categorie_id= $subcategorie->categorie_id;
         $this->name = $subcategorie->name;
         $this->slug = $subcategorie->slug;
         $this->status = $subcategorie->status;
         $this->showhome = $subcategorie->showhome;




    }

    function UpdateSubCategory($id){
        $this->validate([
 
            'name'=> 'required|max:12',
            'status'=>'required',
            'showhome'=>'required',
       
          ]);
    $subcategories =Subcategorie::find($id);
    $subcategories->categorie_id = $this->categorie_id;  
    $subcategories->name = $this->name;
    $subcategories->slug=$this->generateslug($this->name,Subcategorie::class);
    $subcategories->status = $this->status;
    $subcategories->showhome = $this->showhome;
    $subcategories->save();
    $this->reset();
    return back()->with('success','SubCategory Successfull Update');
   
    }


    public function render()
    {
        $subcategories = Subcategorie::with('categorie')->get();
        $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('livewire.subcategorie.edit-subcategory-component',compact('categories','subcategories'));
    }
}
