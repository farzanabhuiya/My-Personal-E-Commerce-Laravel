<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        return view('admin.Order.OrderList');
    }


    public function orderDetail($id){
        return view('admin.Order.OrderDetails',compact('id'));
    }
}
