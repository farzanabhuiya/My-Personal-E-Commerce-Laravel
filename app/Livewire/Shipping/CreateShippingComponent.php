<?php

namespace App\Livewire\Shipping;

use Livewire\Component;
use App\Models\countrie;
use App\Models\District;
use App\Models\Shipping;

class CreateShippingComponent extends Component
{


    public $district_id="";
    public $amount="";



   public function addShipping(){
   $this->validate([
 
     'district_id'=> 'required|unique:shippings,district_id',
     'amount'=> 'required',
     

   ]);
    $shippings = new Shipping();
  
    $shippings->district_id= $this->district_id;
    $shippings->amount= $this->amount;
    $shippings->save();
    $this->reset();
    $this->dispatch('toast',message:'Data stored successfully!');
    $this->dispatch('shippingUpdated');
    return back();
   
    

    }
    public function render()
    {    $districtes=District::orderBy('district_name','ASC')->get();
         $shippings = Shipping::with('District')->get();
        return view('livewire.shipping.create-shipping-component',compact('districtes','shippings'));
    }
}
