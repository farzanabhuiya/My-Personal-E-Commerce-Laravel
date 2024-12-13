<?php

namespace App\Livewire\Shipping;

use Livewire\Component;
use App\Models\District;
use App\Models\Shipping;

class ListShippingComponent extends Component
{

    public $search;
    protected $listeners = ['shippingUpdated' => 'refreshList'];
    public $shippings='';
    public $showshipping=15;
    public function refreshList()
    {
        
        $this->shippings = Shipping::all(); 
    }

    public function mount()
    {

       
        $this->shippings = Shipping::all();
    }



 

    public function render()

    
    {  
        
        // dd($this-> search);
        $shippings = Shipping::query()
          ->where('amount', 'like', '%' . $this->search . '%') 
          ->orWhere('district_id', 'like', '%' . $this->search . '%') ->latest()
          ->paginate(8);
    // dd($shippings );
        
        
        $districtes=District::orderBy('district_name','ASC')->get();
        // $shippings = Shipping::with('District')->paginate(10);
        return view('livewire.shipping.list-shipping-component',compact('districtes','shippings'));
    }
}
