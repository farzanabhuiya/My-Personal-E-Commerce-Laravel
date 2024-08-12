<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    

    public function index(){
        return view('admin.Brand.create-brand');
    }

    public function store(){
        return view('admin.Brand.list-brand');
    }
}
