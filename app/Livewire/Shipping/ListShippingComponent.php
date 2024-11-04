<?php

namespace App\Livewire\Shipping;

use Livewire\Component;
use App\Models\District;
use App\Models\Shipping;

class ListShippingComponent extends Component
{


      
    public $shippings='';
    public $showshipping=15;
    
    public function mount()
    {
        $this->shippings = Shipping::all();
    }


    public function render()

    
    {    $districtes=District::orderBy('district_name','ASC')->get();
        $shippings = Shipping::with('District')->get();
        return view('livewire.shipping.list-shipping-component',compact('districtes','shippings'));
    }
}
