<?php

namespace App\Livewire\Page;

use App\Models\Page;
use Livewire\Component;

class ListPageComponent extends Component
{
   public $search;
   public $status;
   

 public function toggleStatus($id){
    $page= Page::find($id);
    if($page != null){
        $this->status = $page->status;
        $page->update(['status' => $page->status == 1 ? 0 : 1]);
        $this->dispatch('toast', ['success' => 'Status updated successfully!']);
            
    }

 }
    public function render()
    {
        $pages = Page::query()
        ->where('name', 'like', '%' . $this->search . '%')
        ->orwhere('content', 'like', '%' . $this->search . '%')
        ->paginate(8);
        return view('livewire.page.list-page-component',[
            'pages' => $pages,
        ]);
    }
}
