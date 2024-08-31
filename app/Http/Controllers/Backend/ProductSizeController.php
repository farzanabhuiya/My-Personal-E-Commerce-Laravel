<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Productsize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function index(){
        return view('admin.ProductSize.create-productSize');
    }

    public function store(){
        return view('admin.Productsize.list-productsize');
    }


    public function edit($id){
       return view('admin.Productsize.edit-productsize',compact('id'));
        }
    
    public function delete($id){
        Productsize::find($id)->delete();
        return back()->with('success','ProductSize Successfull deleted');
       }
}
