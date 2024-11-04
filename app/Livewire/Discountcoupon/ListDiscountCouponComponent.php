<?php

namespace App\Livewire\Discountcoupon;

use App\Models\DiscountCoupon;
use Livewire\Component;

class ListDiscountCouponComponent extends Component
{
    public $search='';
   
    public $showCupon=15;
   
    // public function mount()
    // {
    //     $this->coupons = DiscountCoupon::all();
    // }

    public function render()
    {

      


        $coupons = DiscountCoupon::query()
        ->where('code', 'like', '%' . $this->search . '%') 
       
        ->paginate($this->showCupon);
    
        return view('livewire.discountcoupon.list-discount-coupon-component',compact('coupons'));
    }
}
