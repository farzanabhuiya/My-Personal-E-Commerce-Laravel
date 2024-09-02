<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  public function index(){
    return view('admin.Product.create-product');
  }

  public function store(){
    return view('admin.Product.list-product');
  }







function relatedproduct(Request $request){
  $tempProduct = [];
if($request->term != ""){
  $products = Product::where('title','like','%' .$request->term.'%')->get();


  if($products != null){
    foreach ($products as $product){
      $tempProduct[] = array('id'=>$product->id, 'text'=>$product->title);

    }
  }
}
 return response()->json([
  'tags' =>$tempProduct,
  'status' =>true,
 ]);
}


  
}