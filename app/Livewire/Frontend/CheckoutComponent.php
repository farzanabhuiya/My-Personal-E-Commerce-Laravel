<?php

namespace App\Livewire\Frontend;

use App\Models\Order;
use Livewire\Component;
use App\Models\District;
use App\Models\Categorie;
use App\Models\OrderItem;
use App\Models\Customeraddersse;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
    // public $cartContents;
    //  public $cartCount;
    // public $categories;
    public $subTotal;
    public $shipping = 0;
    public $grandTotal;
    public $discount='';
    // public $districts;

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



    // public function mount()
    // {
    //     $this->categories = Categorie::orderBy('name', 'ASC')
    //         ->with('Subcategorie')
    //         ->where('showhome', 'Yes')
    //         ->get();
    //     $this->cartContents = Cart::content();
    //     // $this->cartCount = Cart::count();
      
          
    //     // if ($this->cartContents->count() == 0)
    //     // if ($this->cartCount == 0) {
    //     //     return redirect()->route('frontend.contant.Cart');
    //     // }

    //     // $this->subTotal = Cart::subtotal(2, '.', '');
    //     $this->districts = District::orderBy('district_name', 'ASC')->get();
    // }


    public function processCheckout()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:11',
            // 'district' => 'required',
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
            $discountCodeId = '';
            $promoCode = '';
            $order = new Order();
            $order->subtotal = $this->subTotal;
            $order->shipping = $this->shipping;
            $order->grand_total = $this->subTotal + $this->shipping;
            $order->discount = $this->discount;
            $order->coupon_code = $promoCode;
            $order->coupon_code_id = $discountCodeId;
            $order->payment_status = "not paid";
            $order->status = 'pending';
            $order->save();

            // Step 3: Store order items
            // foreach (Cart::content() as $item) 
            foreach ($this->cartContents as $item){
                $orderItem = new OrderItem();
                $orderItem->product_id = $item->id;
                $orderItem->order_id = $order->id;
                $orderItem->name = $item->name;
                $orderItem->qty = $item->qty;
                $orderItem->price = $item->price;
                $orderItem->total = $item->price * $item->qty;
                $orderItem->save();
            }
            // return back();
          
        }
         $this->reset();
        return back();
    }


    public function render()
     {
        $categories = Categorie::orderBy('name', 'ASC')
        ->with('Subcategorie')
        ->where('showhome', 'Yes')->get();
        $cartContents = Cart::content();

        // if (Cart::Count()== 0) {
        //          return redirect()->route('frontend.contant.Cart');
        //    }
    
        $districts = District::orderBy('district_name', 'ASC')->get();
        return view('livewire.frontend.checkout-component',compact('categories','cartContents','districts'));

         return view('livewire.frontend.checkout-component');
    }
}
