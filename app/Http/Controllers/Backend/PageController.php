<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('admin.Page.CreatePage');
    }

    public function Create(){
        return view('admin.Product.create-product');
    }

    public function story(){
        return view('admin.Page.CreatePage');
    }
}
