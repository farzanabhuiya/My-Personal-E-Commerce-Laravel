<?php

namespace App\Livewire\Page;

use App\Models\Page;
use Livewire\Component;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreatePageComponent extends Component
{

    use SlugGenerator;
    public $name="";
    public $slug="";
    public $content;
    public $status=1;
   


    function addPage(){
   $this->validate([
 
     'name'=> 'required|max:20',

   ]);
    $pages = new Page();
  
    $pages->name = $this->name;
    $pages->slug=$this->generateslug($this->name,Page::class);
    $pages->content = $this->content;
    $pages->status = $this->status;
    $pages->save();
    $this->reset();
    $this->dispatch('toast', message:'Data stored successfully!'); 
    return back();
    

    }

    public function render()
    {
        return view('livewire.page.create-page-component');
    }
}
