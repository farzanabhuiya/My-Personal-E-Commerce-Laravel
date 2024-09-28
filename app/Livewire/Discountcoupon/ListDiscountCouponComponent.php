<?php

namespace App\Livewire\Discountcoupon;

use App\Models\DiscountCoupon;
use Livewire\Component;

class ListDiscountCouponComponent extends Component
{
    public $search='';
    public $coupons='';
   
    // public function mount()
    // {
    //     $this->coupons = DiscountCoupon::all();
    // }

    public function render()
    {

        
        $this->coupons = DiscountCoupon::where('code', 'like', '%'.$this->search.'%')->get();
    
        return view('livewire.discountcoupon.list-discount-coupon-component');
    }
}
