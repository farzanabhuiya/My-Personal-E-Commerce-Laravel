<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index(){
        return view('admin.Shipping.create-shipping');
    }


    public function store(){
        return view('admin.Shipping.list-shipping');
    }


    public function delete($id){
        Shipping::find($id)->delete();
        return back()->with('success','Shipping Successfull deleted');;
      }
  
}
