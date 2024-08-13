<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    

    public function index(){
        return view('admin.Brand.create-brand');
    }

    public function store(){
        return view('admin.Brand.list-brand');
    }


    public function edit($id){
        return view('admin.Brand.edit-brand',compact('id'));
    }

    public function delete($id){
      Brand::find($id)->delete();
      return back()->with('success','Brands Successfull deleted');;
    }
}
