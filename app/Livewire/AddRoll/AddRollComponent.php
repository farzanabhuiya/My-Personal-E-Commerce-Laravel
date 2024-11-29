<?php

namespace App\Livewire\AddRoll;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class AddRollComponent extends Component
{

 public $name;


 public function addRoll(){

    $this->validate([
 
        'name'=> 'required|max:20|unique:roles',
       
       
   
      ]);

    $Role = new Role();
    $Role->name = $this->name;
    $Role->save();
    $this->reset('name'); 
    
 }


    public function render()
    {
        return view('livewire.add-roll.add-roll-component');
    }
}
