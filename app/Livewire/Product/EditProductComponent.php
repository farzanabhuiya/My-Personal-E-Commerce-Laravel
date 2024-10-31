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

class EditProductComponent extends Component
{

    use WithFileUploads;
    use SlugGenerator;

    public $title = "";
    public $description = "";
    public $short_description = "";
    public $shipping_returns = "";
    public $related_products = "";
    public $images = [];
    public $price = "";
    public $compare_price = "";
    public $categorie_id;
    public $subcategorie_id = "";
    public $brand_id;
    public $item_id = "";
    public $is_featured = "no";
    public $sku = "";
    public $barcode = "";
    public $track_qty = "Yes";
    public $qty = "";
    public $status = 1;
    public $discount_amount = "";
    public $discount_type = "percent";
    public $offer_amount = "";
    public $offer_type = "percent";
    public $productsize_id = "";
    public $productcolour_id = "";

    public $productPhotos = [];
    public $category;

    public $subcategorie;
    public $brand;

    public $Item;

    public $productSize;
    public $productColor;


    public $productid;

    public $editeProduct;

    
    protected $rules = [
        'title' => 'required|string|max:255',

        'description' => 'required|string',
        'subcategorie_id' => 'required',
        'short_description' => 'required|string|max:65535', // text field max length
        'shipping_returns' => 'required|string|max:65535',  // text field max length
        'related_products' => 'nullable|string|max:65535',  // text field max length
        'images' => 'required|max:255',               // or use 'image' if storing an image file
        'price' => 'required|numeric|min:0|max:99999999.99',

        'sku' => 'required|string|max:100|unique:products,sku',

        'status' => 'required',
        "qty" => 'required',



    ];
    // =========REMOVE IMAGE==============//
    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images); 
    }

    public function mount($productId)
    {
        $this->productid = $productId;
        $this->editeProduct = Product::find($this->productid);

        // ============== FOR CATEGORIE SELECT==============//

        $this->category = Categorie::select('id')->orderBy('id', 'asc')->first();
        if ($this->category) {
            $this->categorie_id = $this->category->id;
        }
        // ============== FOR CATEGORIE SELECT END==============//

        // ============== FOR SUBCATEGORIE SELECT==============//

        $this->subcategorie = Subcategorie::where('categorie_id', $this->categorie_id)->select("id")->orderBy('id', 'asc')->first();



        if ($this->subcategorie) {
            $this->subcategorie_id = $this->subcategorie->id;
        } else {
            $this->subcategorie_id;
        }

        // ============== FOR SUBCATEGORIE SELECT END==============//




        // ============== FOR BRAND SELECT ==============//

        $this->brand = Brand::select('id')->orderBy('id', 'asc')->first();

        // dd( $this->brand );
        if ($this->brand) {
            $this->brand_id = $this->brand->id;
        }


        // ============== FOR BRAND SELECT END==============//



        // ============== FOR PRODUCT ITEM SELECT START==============//


        $this->Item = Item::select('id')->orderBy('id', 'asc')->first();

        // dd( $this->brand );
        if ($this->Item) {
            $this->item_id = $this->Item->id;
        }

        // ============== FOR PRODUCT ITEM SELECT END==============//


        // ============== FOR PRODUCT PRODUCTSIZE SELECT START==============//

        $this->productSize = Productsize::select('id')->orderBy('id', 'asc')->first();

        // dd( $this->brand );
        if ($this->productSize) {
            $this->productsize_id = $this->productSize->id;
        }
        // ============== FOR PRODUCT PRODUCTSIZE SELECT END==============//



        // ============== FOR PRODUCT PRODUCCOLOR SELECT START==============//

        $this->productColor = Productcolour::select('id')->orderBy('id', 'asc')->first();

        // dd( $this->brand );
        if ($this->productColor) {
            $this->productcolour_id = $this->productColor->id;
        }
        // ============== FOR PRODUCT PRODUCOLOR SELECT END==============//



    }








    public function updatedImages()
    {

        $this->dispatch('imageSelected');
    }



    public function EditeProduct()
    {
        // Validate the incoming data
        $this->validate($this->rules);

        // Find the product by ID
        $product = Product::find($this->productid);


        if (!$product) {
            return back()->with('error', 'Product not found.');
        }

        // Handle image uploads
        if (!empty($this->images)) {
            foreach ($this->images as $image) {
                $fileName = Str::random(10) . '.' . $image->extension();
                $image->storeAs('ProductImage', $fileName, 'public');
                $this->productPhotos[] = $fileName;
            }
            $product->image = json_encode($this->productPhotos);
        } else {
            $product->image = null; // No images uploaded
        }

        // Assign product properties
        $product->title = $this->title;
        $product->slug = $this->generateslug($this->title, Product::class);
        $product->description = $this->description;
        $product->short_description = $this->short_description;
        $product->shipping_returns = $this->shipping_returns;
        $product->related_products = $this->related_products;
        $product->price = $this->price;
        $product->compare_price = $this->compare_price;
        $product->categorie_id = $this->categorie_id;
        $product->subcategorie_id = $this->subcategorie_id;
        $product->brand_id = $this->brand_id;
        $product->item_id = $this->item_id;
        $product->is_featured = $this->is_featured;
        $product->sku = $this->sku;
        $product->barcode = $this->barcode;
        $product->track_qty = $this->track_qty;
        $product->qty = $this->qty;
        $product->status = $this->status;
        $product->discount_amount = $this->discount_amount;
        $product->discount_type = $this->discount_type;
        $product->offer_amount = $this->offer_amount;
        $product->offer_type = $this->offer_type;
        $product->productsize_id = $this->productsize_id;
        $product->productcolour_id = $this->productcolour_id;

        // Save the product
        $product->save();

        $this->reset(); // Reset relevant properties
        $this->dispatch('toast', message: 'Data stored successfully!');
        return redirect()->route('Product.index');
    }



    public function render()
    {

        $subcategories = Subcategorie::with('categorie')->get();
        $categories = Categorie::with('Subcategorie')->select('id', 'name')->latest()->get();
        $brands = Brand::latest()->get();
        $items = Item::latest()->get();
        $sizes = Productsize::latest()->get();
        $colours = Productcolour::latest()->get();
        return view('livewire.product.edit-product-component', compact('categories', 'subcategories', 'brands', 'items', 'sizes', 'colours'));
    }
}
