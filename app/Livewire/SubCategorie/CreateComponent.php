<?php

namespace App\Livewire\SubCategorie;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreateComponent extends Component
{

    use SlugGenerator;
    // public $categorie_id="";
    public $name="";
    public $slug="";
    public $status="1";
    public $showhome="No";
    public $categorie_id;


//     public function mount($categories)
//    {
//     // Default category ID set korar jonno
//     $this->categorie_id = $categories->first()->id ?? null;

//     if (!$this->categorie_id && $categories->isNotEmpty()) {
//         $this->categorie_id = $categories->first()->id;
//     }
//         }

     



    function addSubcategorie(){
        $this->validate([
 
            'name'=> 'required|max:12',
            'status'=>'required',
            'showhome'=>'required',
       
          ]);

           
           $subcategorie = new Subcategorie();
           $subcategorie->categorie_id = $this->categorie_id;
           $subcategorie->name = $this->name;
           $subcategorie->slug=$this->generateslug($this->name,Subcategorie::class);
           $subcategorie->status = $this->status;
           $subcategorie->showhome = $this->showhome;
           $subcategorie->save();
           $this->reset();
           return back()->with('success','SubCategory Successfull Create');
          
        
           }
       
    
    public function render()
    {     $subcategories = Subcategorie::with('categorie')->get();
          $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('livewire.Subcategorie.create-component',compact('categories','subcategories'));
    }
}
