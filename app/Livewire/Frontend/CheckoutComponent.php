<?php

namespace App\Livewire\Frontend;

use App\Models\Order;
use Livewire\Component;
use App\Models\District;
use App\Models\Shipping;
use App\Models\Categorie;
use App\Models\OrderItem;
use App\Models\Customeraddersse;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
     
    public $amount='';
    public $subTotal;
    public $shipping;
    public $grandTotal;
    public $discount=00;
   

    public $first_name='';
    public $last_name=''; 
    public $email='';
     public  $mobile='';
     public $district='';
     public $address=''; 
     public $apartment='';
     public $city='';
     public $state=''; 
     public $zip='';
     public $notes='';
     public $payment_method='';
    
     public $shippingCharge;

    public function updateShippingCharge($selectedValue)
    {
       
        $shipping = Shipping::where('district_id', $selectedValue)->first();
        if ($shipping && $shipping->amount !== null) {        
            $this->shippingCharge = $shipping->amount;
            $this->district=$selectedValue;
        } else {
            $this->shippingCharge = 0;
        }
        
    
    }



    public function processCheckout()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:11',
             'district' => 'required',
            'address' => 'required',
        
     ]);

        // Step 1: Save user address
        $address = new Customeraddersse();
        $address->user_id = auth()->user()->id;
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->email = $this->email;
        $address->mobile = $this->mobile;
        $address->district_id = $this->district;
        $address->address = $this->address;
        $address->apartment = $this->apartment;
        $address->city = $this->city;
        $address->state = $this->state;
        $address->zip = $this->zip;
        $address->notes = $this->notes;
        $address->save();

        // Step 2: Store data in order table
        if ($this->payment_method === 'cod') {       
            $order = new Order();
            $order->user_id =auth()->user()->id;
            $order->subtotal = Cart::subTotal();
            $order->shipping = $this->shippingCharge;
            $order->grand_total = $this->subTotal + $this->shipping;
            $order->discount = $this->discount;
            $order->coupon_code = 00;
            $order->coupon_code_id = 00;
            $order->payment_status = "not paid";
            $order->status = 'pending';
            $order->save();

            // Step 3: Store order items
            foreach (Cart::content() as $item){
                $orderItem = new OrderItem();
                $orderItem->product_id = $item->id;
                $orderItem->order_id = $order->id;
                $orderItem->name = $item->name;
                $orderItem->qty = $item->qty;
                $orderItem->price = $item->price;
                $orderItem->total = $item->price * $item->qty;
                $orderItem->save();
            }
          
             Cart::destroy();
        }
        
      $this->reset();
      return back();
    }

 
    public function render()
     {
        $this->grandTotal=Cart::SubTotal()+$this->shippingCharge;
       // dd($this->districts);
        $categories = Categorie::orderBy('name', 'ASC')
        ->with('Subcategorie')
        ->where('showhome', 'Yes')->get();
        $cartContents = Cart::content();
        $districts = District::orderBy('district_name', 'ASC')->get();
        return view('livewire.frontend.checkout-component',compact('categories','cartContents','districts'));

    }
}
