<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class Edit extends Component
{
   
    use SlugGenerator;

    public $id;
    public $name="";
    public $slug="";
    public $status="";
    public $showhome="";

    function mount($id){
         $categorie= Categorie::find($id);
         $this->id =$categorie->id;
         $this->name = $categorie->name;
         $this->slug = $categorie->slug;
         $this->status = $categorie->status;
         $this->showhome = $categorie->showhome;




    }

    function UpdateCategory($id){
        $this->validate([
 
            'name'=> 'required|max:12',
            'status'=>'required',
            'showhome'=>'required',
       
          ]);
    $categories =Categorie::find($id);
        
    $categories->name = $this->name;
    $categories->slug=$this->generateslug($this->name,Categorie::class);
    $categories->status = $this->status;
    $categories->showhome = $this->showhome;
    $categories->save();
    $this->reset();
    return back()->with('success','Category Successfull Update');
    }


    
    public function render()
    {
        return view('livewire.categorie.edit');
    }
}
