<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class Create extends Component
{
 

    use SlugGenerator;
    public $name="";
    public $slug="";
    public $status="1";
    public $showhome="No";


    function addCategory(){
   $this->validate([
 
     'name'=> 'required|max:20',
     'status'=>'required',
     'showhome'=>'required',

   ]);
    $category = new Categorie();
  
    $category->name = $this->name;
    $category->slug=$this->generateslug($this->name,Categorie::class);
    $category->status = $this->status;
    $category->showhome = $this->showhome;
    $category->save();
    $this->reset();
    return back()->with('success','Category Successfull Create');
    

    }




    public function render()
    {
        return view('livewire.categorie.create');
    }
}











