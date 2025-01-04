<?php

namespace App\Livewire\Page;

use App\Models\Page;
use Livewire\Component;

class PagedetailsComponent extends Component
{


    
    public $page;
    public $id;

    public function mount($id){
        $this->page = Page::find($id);     
     
    }


    public function render()
    {
        return view('livewire.page.pagedetails-component');
    }
}
