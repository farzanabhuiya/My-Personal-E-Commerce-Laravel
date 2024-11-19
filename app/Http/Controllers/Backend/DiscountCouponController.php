<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DiscountCoupon;
use Illuminate\Http\Request;

class DiscountCouponController extends Controller
{
    public function index(){
        return view('admin.DiscountCoupon.create-discount-coupon');
    }

    public function store(){
        return view('admin.DiscountCoupon.list-discount-coupon');
    }


    public function delete(Request $request, $id)
    {
       
        $discountcupon = DiscountCoupon::find($id);
    
     
        if ($discountcupon) {
            $discountcupon->delete(); 
            return response()->json(['success' => 'Discount cupon deleted successfully!']);
        } else {
            return response()->json(['error' => 'Discount cupon not found!'], 404); 
        }
    }








}
