<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductColourController extends Controller
{
    public function index(){
        return view('admin.ProductColour.create-productColour');
    }

    public function store(){
      return view('admin.ProductColour.list-productColour');
    }
}
