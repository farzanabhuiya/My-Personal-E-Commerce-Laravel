<?php

namespace App\Livewire\Shipping;

use Livewire\Component;
use App\Models\District;
use App\Models\Shipping;

class EditShippingComponent extends Component
{

  
    public $id="";
    public $district_id="";
    public $amount="";


    function mount($id){
        $shipping= Shipping::find($id);
        $this->id =$shipping->id;
        $this->district_id = $shipping->district_id;
        $this->amount = $shipping->amount;
   }


   public function UpdateShipping($id){
    $this->validate([
  
      
      'amount'=> 'required',
 
    ]);
     
    $shippings =Shipping::find($id);
     $shippings->district_id= $this->district_id;
     $shippings->amount= $this->amount;
     $shippings->save();
    //  $this->reset();
    $this->dispatch('shippingUpdated');
     return back()->with('success','Shipping Successfull Upadte');
     
 
     }
    public function render()
    {

        //    ->paginate($this->paginate)
        $districtes=District::get();
        $shippings = Shipping::with('district')->get();
        
        return view('livewire.shipping.edit-shipping-component',compact('districtes','shippings'));
    }
}
