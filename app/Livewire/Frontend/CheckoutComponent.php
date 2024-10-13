<?php

namespace App\Livewire\Frontend;

use App\Models\Order;
use Livewire\Component;
use App\Models\District;
use App\Models\Shipping;
use App\Models\Categorie;
use App\Models\OrderItem;
use App\Models\Customeraddersse;
use App\Models\DiscountCoupon;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
     
    public $amount='';
    public $subTotal;
    public $shipping;
    public $grandTotal;
    public $discount;
    public $coupon_code;
    public $coupon_code_id;
  

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
     public $CouponCode;
     //public $coupon;
     public $message='';
    
   


          //Shipping e kaj
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
            

                ///Discount Coupone Apply
        function applyCoupon(){
             $coupon = DiscountCoupon::where('code', $this->CouponCode )->first();
            //dd($coupon);
    
            if (!$coupon) {
                $this->message = 'Invalid coupon code';
                $this->discount = 0;
         
                // Check expires_at for the coupon
            }else if($coupon->isExpired()){
                $this->message = 'Coupon has expired';
               $this->discount = 0;
            }

                // Check max uses for the coupon
        if ($coupon->max_uses > 0) {
            $couponUsed = Order::where('coupon_code_id', $coupon->id)->count();
            if ($couponUsed >= $coupon->max_uses) {
                $this->message = 'Invalid discount coupon';
              
            }
             // Check max uses per user
        }elseif($coupon->max_uses_user > 0) {
            $couponUsedByUser = Order::where(['coupon_code_id' => $coupon->id, 'user_id' => auth()->user()->id])->count();
            if ($couponUsedByUser >= $coupon->max_uses_user) {
                $this->message = 'You already used this coupon code';
                
            }
        }

    
            // Apply the discount
               $subTotal = Cart::subTotal();
            if ($coupon->type == 'percent') {
                $this->discount = ($coupon->discount_amount / 100)* $subTotal;
            } else {
                $this->discount = $coupon->discount_amount;
            }
            $this->coupon_code_id = $coupon->id;
            // Update the total after discount
            $this->grandTotal =$subTotal - $this->discount + $this->shippingCharge;;
            $this->message = 'Coupon applied successfully!';
            //dd($coupon);
        
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
            $order->grand_total =Cart::subTotal() - $this->discount + $this->shippingCharge;
            $order->discount = $this->discount;
            $order->coupon_code = $this->CouponCode;
            $order->coupon_code_id = $this->coupon_code_id ?? 0;
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
      return back()->with('success','Your Order Successfull ');
    }

 
    public function render()
     {
        
        $this->grandTotal=Cart::SubTotal()-$this->discount +$this->shippingCharge;
       // dd($this->grandTotal);
       // dd($this->districts);
        $categories = Categorie::orderBy('name', 'ASC')
        ->with('Subcategorie')
        ->where('showhome', 'Yes')->get();
        $cartContents = Cart::content();
        $districts = District::orderBy('district_name', 'ASC')->get();
        return view('livewire.frontend.checkout-component',compact('categories','cartContents','districts'));

    }
}
