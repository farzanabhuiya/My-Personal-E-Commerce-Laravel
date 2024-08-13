<?php

namespace App\Http\Controllers\Backend;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index(){
        return view('admin.Item.create-item');
    }

    public function store(){
        return view('admin.Item.list-item');
    }

    public function edit($id){
        return view('admin.Item.edit-item',compact('id'));
    }

    public function delete($id){
        Item::find($id)->delete();
        return back()->with('success','Items Successfull deleted');
    }
}
