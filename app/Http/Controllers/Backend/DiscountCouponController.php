<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountCouponController extends Controller
{
    public function index(){
        return view('admin.DiscountCoupon.create-discount-coupon');
    }

    public function store(){
        return view('admin.DiscountCoupon.list-discount-coupon');
    }
}
