<?php

namespace App\Http\Controllers\Backend;

use App\Models\Item;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Productsize;
use Illuminate\Http\Request;
use App\Models\Productcolour;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\SlugGenerator;

class ProductController extends Controller
{
  
  use SlugGenerator;





  
  private $Ruls = [
    'title'=>'required',
    'description'=>'required',
    'short_discreiption'=>'required',
    'shipping_returns'=>'required',
    'price'=>'required',
    
    'Product_image'=>'required',
    'categorie_id'=>'required',
    'subcategorie_id'=>'required',
    'brand_id'=>'required',
    'item_id'=>'required',
    'sku'=>'required',
    'barcode'=>'required',
    'track_qty'=>'required',
    'status'=>'required',
    'productsize_id'=>'required',
    'productcolour_id'=>'required',
    
    
    
    
  ];
  
  
  
  public function index(){
    return view('admin.Product.list-product');
  }

  public function Create( ){
    
    $categories = Categorie::where('showhome','yes')->select('id','name','slug')->get();
    
    $brands = Brand::where('status',1)->select('id','name','slug','image')->get();
    $items  = Item::select('id','name','slug','image')->get();
    $sizes = Productsize::select('id','size')->get();
    $colours  = Productcolour::select('id','colour')->get();
    // dd($colours );
    
    
    
    
    
    
    
    
    
    return view('admin.Product.create-product',compact('categories','brands','items','sizes','colours'));
  }

  // poduct store
  
  function store(Request $request){
    
    $request->validate(
      
      $this->Ruls,
      
      
    );
    

    
  
    $productPhotos =[];
      
    if ($request->hasFile('Product_image')) {
    
    
      $productPhotos = [];
      
     
      foreach ($request->Product_image as $image) {
          
          $filename = time() . '_' . $image->getClientOriginalName();
          
       
          $image->storeAs('ProductImage', $filename, 'public');
          
         
          $productPhotos[] = $filename;
      }
      
      
  }
  
   
    
    
    
  if(!empty($request->realted_product)){
    $related_product = implode(',',$request->realted_product);
  }else{
    $related_product='';
  }
   
  
    
    
    
      $products = new Product();
           $products->title = $request->title;
           $products->slug=$this->generateslug($request->title, Product::class);
           $products-> description= $request->description;
           $products->short_description = $request->short_discreiption;
           $products-> shipping_returns= $request->shipping_returns;
           $products->related_products =  $related_product;

           $products->image = json_encode($productPhotos);

           $products-> price= $request->price;
           $products->compare_price = $request->compare_price;
           $products->categorie_id = $request->categorie_id;
           $products->subcategorie_id = $request->subcategorie_id;
           $products->brand_id = $request->brand_id;
           $products->item_id = $request->item_id;
           $products-> is_featured= $request->is_featured;
           $products-> sku= $request->sku;
           $products-> barcode= $request->barcode;
           $products->track_qty = $request->track_qty;
           $products-> qty= $request->qty;
           $products-> status= $request->status;
           $products-> discount_amount= $request->discount_amount;
           $products->discount_type = $request->discount_type;
           $products->offer_amount = $request->offer_amount;
           $products-> offer_type= $request->offer_type;
           $products-> productsize_id= $request->productsize_id;
           $products->productcolour_id = $request->productcolour_id;
            // dd($products);
           $products->save();
           session()->flash('messaeg','helloo');
           return back()->with('success','product Successfull Create');
           
           
           
    
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



public function getRelatedProducts(Request $request)
{
  
  $tempProduct = [];
    $search = $request->term; // Select2 ডিফল্টভাবে 'term' নামে কিওয়ার্ড পাঠায়
  
    if($search!=""){
      $products = Product::where('title','like','%'.$search.'%')->get();
      
      if($products!=null){
        foreach($products as $product){
          
          $tempProduct []= array('id'=>$product->id,'text'=>$product->title);
          
        }
        
        
        
      }
      
      // print_r( $tempProduct);
      
      
    }
    
    return response()->json([
      
      'tags'=> $tempProduct,
      'status'=>true,
    ]);
    
    // return $request->all();
    
 
  }

// ==================PRODUCT EDITE===================//

function productEdit( $productId){

  return view('admin.product.edit-product',compact('productId'));

}








//================== PRODUCT DELETE============//
function deleteProduct($productId){

  $product=Product::find($productId);

  $product->delete();
  return back();

}






  
  
  

  
  
  
}