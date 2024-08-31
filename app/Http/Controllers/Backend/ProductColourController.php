<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Productcolour;
use Illuminate\Http\Request;

class ProductColourController extends Controller
{
    public function index(){
        return view('admin.ProductColour.create-productColour');
    }

    public function store(){
      return view('admin.ProductColour.list-productColour');
    }


    public function edit($id){
       return view('admin.ProductColour.edit-productColour',compact('id'));
      }
    
    public function delete($id){
      Productcolour::find($id)->delete();
      return back()->with('success','ProductColour Successfull deleted');
     }
}
