<?php

namespace App\Livewire\Discountcoupon;

use App\Models\DiscountCoupon;
use Livewire\Component;

class ListDiscountCouponComponent extends Component
{
    public $search;
    public $coupons;
    // public function mount()
    // {
    //     $this->coupons = DiscountCoupon::all();
    // }

    public function render()
    {
        if(! $this->search){
            $this->coupons =DiscountCoupon::latest()->paginate(3)->all(); 
        }else{
            $this->coupons = DiscountCoupon::where('name', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.discountcoupon.list-discount-coupon-component');
    }
}
