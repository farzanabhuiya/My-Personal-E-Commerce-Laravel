<?php

namespace App\Livewire\Product;

use App\Models\Item;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\Productsize;
use Illuminate\Support\Str;
use App\Models\Subcategorie;
use App\Models\Productcolour;
use Livewire\WithFileUploads;
use App\Http\Controllers\Helpers\SlugGenerator;

class CreateProductComponent extends Component
{
    use WithFileUploads;      
    use SlugGenerator;
      public $title="";
      public $description="";
      public $short_description="";
      public $shipping_returns="";
      public $related_products="";
      public $images=[];
      public $price="";
      public $compare_price="";
      public $categorie_id="";
      public $subcategorie_id="";
      public $brand_id="";
      public $item_id="";
      public $is_featured="";
      public $sku="";
      public $barcode="";
      public $track_qty="";
      public $qty="";
      public $status="";
      public $discount_amount="";
      public $discount_type="";
      public $offer_amount="";
      public $offer_type="";
      public $productsize_id="";
      public $productcolour_id="";

     public function addProduct(){
        

        $this->validate([
 
            'title'=> 'required|max:25',
            'categorie_id' =>'required',
            'subcategorie_id' =>'required',
            'brand_id' =>'required',
            'price' =>'required',
            
       
          ]);
          $productPhotos =[];
           foreach ($this->images as $image) {
            $fileName = Str::random(10).'.'.$image->extension();  
            $image->storeAs('ProductImage',$fileName,'public');
            $productPhotos[]=$fileName;  
        }
          
           $products = new Product();
           $products->title = $this->title;
           $products->slug=$this->generateslug($this->title,Product::class);
           $products-> description= $this->description;
           $products->short_description = $this->short_description;
           $products-> shipping_returns= $this->shipping_returns;
           $products->related_products = $this->related_products;

           $products->image = json_encode($productPhotos);

           $products-> price= $this->price;
           $products->compare_price = $this->compare_price;
           $products->categorie_id = $this->categorie_id;
           $products->subcategorie_id = $this->subcategorie_id;
           $products->brand_id = $this->brand_id;
           $products->item_id = $this->item_id;
           $products-> is_featured= $this->is_featured;
           $products-> sku= $this->sku;
           $products-> barcode= $this->barcode;
           $products->track_qty = $this->track_qty;
           $products-> qty= $this->qty;
           $products-> status= $this->status;
           $products-> discount_amount= $this->discount_amount;
           $products->discount_type = $this->discount_type;
           $products->offer_amount = $this->offer_amount;
           $products-> offer_type= $this->offer_type;
           $products-> productsize_id= $this->productsize_id;
           $products->productcolour_id = $this->productcolour_id;
            // dd($products);
           $products->save();
           $this->reset();
           return back()->with('success','product Successfull Create');
           
       
           
     }
    public function render()
    {   
        $subcategories = Subcategorie::with('categorie')->get();
        $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        $brands = Brand::latest()->get();
        $items = Item::latest()->get();
        $sizes = Productsize::latest()->get();
        $colours = Productcolour::latest()->get();
        return view('livewire.product.create-product-component',compact('categories','subcategories','brands','items','sizes','colours'));
    }
}
