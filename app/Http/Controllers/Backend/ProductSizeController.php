<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function index(){
        return view('admin.ProductSize.create-productSize');
    }

    public function store(){
        return view('admin.Productsize.list-productsize');
    }
}
