<?php

namespace App\Livewire\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreatePageComponent extends Component
{
    use WithFileUploads;
    use SlugGenerator;
    public $name="";
    public $slug="";
    public $image;
    public $content;
    public $status=1;
    public $pagePhotos = [];
   


    function addPage(){
   $this->validate([
 
    'name' => 'required|max:20|unique:pages,name',
     'image'=>'required',

   ]);
 
   $fileName = time().'.'.$this->image->extension();   
   $this->image->storeAs('PageImage',$fileName,'public');
   $this->pagePhotos[]=$fileName;

    $pages = new Page();
    $pages->name = $this->name;
    $pages->slug=$this->generateslug($this->name,Page::class);
    $pages->image = json_encode($this->pagePhotos);
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
