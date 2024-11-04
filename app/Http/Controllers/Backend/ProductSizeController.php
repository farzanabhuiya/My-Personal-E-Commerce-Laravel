<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Productsize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function index(){
       $ProductSize  = Productsize::select('size')->latest()->get(); 
     
         return view('admin.Productsize.list-productsize');
    }

    public function store(){
        return view('admin.ProductSize.create-productSize');
    }


    public function edit($id){
       return view('admin.Productsize.edit-productsize',compact('id'));
        }
    
        public function delete(Request $request, $id)
        {
           
            $Productsize = Productsize::find($id);
        
         
            if ($Productsize) {
                $Productsize->delete(); 
                return response()->json(['success' => 'Productsize deleted successfully!']);
            } else {
                return response()->json(['error' => 'Productsize  not found!'], 404); 
            }
        }
}