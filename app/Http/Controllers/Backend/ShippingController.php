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
     
    
    public function edit($id){
        return view('admin.Shipping.edit-shipping',compact('id'));
        }

        public function delete(Request $request, $id)
        {
           
            $Shipping = Shipping::find($id);
        
         
            if ($Shipping) {
                $Shipping->delete(); 
                return response()->json(['success' => 'Shipping deleted successfully!']);
            } else {
                return response()->json(['error' => 'Shippingnot found!'], 404); 
            }
        }
 
}
