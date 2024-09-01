<?php

namespace App\Livewire\Discountcoupon;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\DiscountCoupon;

class CreateDiscountCouponComponent extends Component
{


    public $code="";
    public $name="";
    public $max_uses ="";
    public $max_uses_user="";
    public $type ="";
    public $discount_amount ="";
    public $min_amount ="";
    public $status="";
    public $starts_at ="";
    public $expires_at ="";
    public $request ="";
  


  function addDiscount(){
    $this->validate([
     
     'code'=> 'required|max:8',
     'starts_at'=>'required',
     'expires_at'=>'required',
     'discount_amount'=>'required',
     

   ]);

//    if(!empty($starts_at)){
//     $start_time = Carbon::now()->format('Y/m/d H:i',$starts_at);
//   }

//   if(!empty($starts_at) && !empty($expires_at)){
//       $expires = Carbon::now()->format('Y/m/d H:i',$expires_at); 
//       $start = Carbon::now()->format('Y/m/d H:i',$starts_at);
//    }


//     if(!empty($request->starts_at)){
//     $start_time = Carbon::now()->format('Y/m/d H:i',$request->starts_at);
//   }

//   if(!empty($request->starts_at) && !empty($request->expires_at)){
//       $expires = Carbon::now()->format('Y/m/d H:i',$request->expires_at); 
//       $start = Carbon::now()->format('Y/m/d H:i',$request->starts_at);
//    }

    $discountCoupons = new DiscountCoupon();
  
    $discountCoupons-> code= $this->code;
    $discountCoupons-> name= $this->name;
    $discountCoupons-> max_uses= $this->max_uses;
    $discountCoupons-> max_uses_user= $this->max_uses_user;
    $discountCoupons-> type= $this->type;
    $discountCoupons-> discount_amount= $this->discount_amount;
    $discountCoupons-> min_amount= $this->min_amount;
    $discountCoupons->status = $this->status;
    $discountCoupons->starts_at = $this->starts_at;
    $discountCoupons->expires_at = $this->expires_at;
    $discountCoupons->save();
    $this->reset();
    return back()->with('success','discount Successfull Create');
    

    }
    public function render()
    {
        return view('livewire.discountcoupon.create-discount-coupon-component');
    }
}
