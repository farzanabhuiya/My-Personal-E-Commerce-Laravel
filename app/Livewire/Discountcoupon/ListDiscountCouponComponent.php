<?php

namespace App\Livewire\Discountcoupon;

use App\Models\DiscountCoupon;
use Livewire\Component;

class ListDiscountCouponComponent extends Component
{

    public $coupons;
    public function mount()
    {
        $this->coupons = DiscountCoupon::all();
    }

    public function render()
    {
        return view('livewire.discountcoupon.list-discount-coupon-component');
    }
}
