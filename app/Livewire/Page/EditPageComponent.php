<?php

namespace App\Livewire\Page;

use App\Models\Page;
use Livewire\Component;
use App\Http\Controllers\Helpers\SlugGenerator;

class EditPageComponent extends Component
{

    use SlugGenerator;
    public $name="";
    public $slug ="";
    public $status;
    public $content;
    public $id;
  
public function mount($id){
    $pages= Page::find($id);
    $this->id             =$pages->id;
    $this->name            = $pages->name;
    $this->slug            = $pages->slug;
    $this->content         =$pages->content;
    $this->status          =$pages->status;
}


public function UpdatePage($id){
    $this->validate([
 
        'name'=> 'required|max:20',
   
      ]);

      $pages= Page::find($id);
      $pages->name     =$this->name;
      $pages->slug             =$this->generateslug($this->name,Page::class);
      $pages->content =$this->content;
      $pages->status        =$this->status;
      $pages->save();
      $this->reset();
      $this->dispatch('toast', message:'Data stored successfully!'); 
      return back();

}
    public function render()
    {
        return view('livewire.page.edit-page-component');
    }
}
