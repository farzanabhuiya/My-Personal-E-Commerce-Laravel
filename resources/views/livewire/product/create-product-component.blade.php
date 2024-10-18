<div>




    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid ">
            <div class="row ">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create Brand</h1>
                    </div>
                    <div class="">
                        <a href="{{ route('Product.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <!-- Default box -->
        <div class="container-fluid">
            <form wire:submit.prevent="addProduct" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="row">
                    <div class="col-md-8 h-auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title">Title</label>
                                            <input wire:model='title' type="text" id="title" class="form-control"
                                                placeholder="Title">
                                                @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3" wire:ignore>
                                            <label for="description">Description</label>
                                            <textarea wire:model='description' name="description" id="description" class="ckeditor">{{ old('description') }}</textarea>


                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                             <h1>{{$description}}</h1>


                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3" wire:ignore>
                                            <label for="shortdiscreiption">Short Discription</label>
                                            <textarea class="w-full" wire:model='short_description' name='short_discreiption' id="shortdiscreiption" short_discreiptionclass="summernote" placeholder="Short Discreiption">{{ old('short_discreiption') }}  </textarea>
                                            @error('')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror


                                           
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3" wire:ignore>
                                            <label for="short_description">Returns</label>
                                            <textarea wire:model='shipping_returns' name='shipping_returns' id="shipping_returns" class="summernote" placeholder="shipping_returns">{{ old('shipping_returns') }}</textarea>
                                            @error('shipping_returns')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div >


                            <input type="file" wire:model='images' id="images" class="form-control" multiple
                                placeholder="Price">

                              @if ($images) 



                                @foreach ($images as $image)
                                    <img src="{{ $image->temporaryUrl() }}" width="300px" class="mt-2">
                                @endforeach
                                
                            @endif



                            @error('image.*')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Pricing</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="price">Price</label>
                                            <input type="text" wire:model='price' id="price" class="form-control"
                                                placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="compare_price">Compare at Price</label>
                                            <input type="text" wire:model='compare_price' id="compare_price"
                                                class="form-control" placeholder="Compare Price">
                                            <p class="text-muted mt-3">
                                                To show a reduced price, move the product’s original price into Compare
                                                at price. Enter a lower value into Price.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Inventory</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sku">SKU (Stock Keeping Unit)</label>
                                            <input type="text" wire:model='sku' id="sku" class="form-control"
                                                placeholder="sku">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="barcode">Barcode</label>
                                            <input type="text" wire:model='barcode' id="barcode"
                                                class="form-control" placeholder="Barcode">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input wire:model='track_qty' class="d-none" type="text"
                                                    value="no">
                                                <input wire:model='track_qty' class="custom-control-input"
                                                    type="checkbox" id="track_qty" value="yes" name="track_qty">
                                                <label for="track_qty" class="custom-control-label">Track
                                                    Quantity</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input wire:model='qty' type="number" min="0" id="qty"
                                                class="form-control" placeholder="Qty">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Related products</h2>
                                <div class="mb-3" wire:ignore>
                                    <select multiple name="realted_product[]" class=" related_product"
                                        id="product-select">

                                    </select>















                                </div>
                            </div>
                        </div>






                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product status</h2>
                                <div class="mb-3">
                                    <select wire:model='status' id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="h4  mb-3">Product category</h2>
                                <div class="mb-3">
                                    <label for="category">Category</label>
                                    <select wire:model='categorie_id' id="categorie_id"
                                        class="form-control categorySelect ">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                                        @empty
                                            <option disabled selected>No catrgory found</option>
                                        @endforelse

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category">Sub category</label>
                                    <select wire:model='subcategorie_id' id="sub_category"
                                        class="form-control subcategorieSelect">
                                        <option disabled selected>Select SubCategory </option>

                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product brand</h2>
                                <div class="mb-3">

                                    <select wire:model='brand_id' id="brand_id" class="form-control">
                                        @forelse ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                                        @empty
                                            <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Item</h2>
                                <div class="mb-3">

                                    <select wire:model='item_id' id="item_id" class="form-control">
                                        @forelse ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>

                                        @empty
                                            <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Sizes</h2>
                                <div class="mb-3">
                                    <select wire:model='productsize_id' id="productsize_id" class="form-control">
                                        @forelse ($sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->size }}</option>

                                        @empty
                                            <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Colour</h2>
                                <div class="mb-3">
                                    <select wire:model='productcolour_id' id="productcolour_id" class="form-control">
                                        @forelse ($colours as $colour)
                                            <option value="{{ $colour->id }}">{{ $colour->colour }}</option>

                                        @empty
                                            <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Featured product</h2>
                                <div class="mb-3">
                                    <select wire:model='is_featured' name="is_featured" id="status"
                                        class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Discount_Amount</h2>
                                <div class="mb-3">
                                    <input type="text" wire:model='discount_amount' id="discount_amount"
                                        class="form-control" placeholder="discount_amount">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Discount_type</h2>
                                <div class="mb-3">
                                    <select wire:model='discount_type' id='discount_type' class="form-control">
                                        <option value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Offer_Amount</h2>
                                <div class="mb-3">
                                    <input type="text" wire:model='offer_amount' id="offer_amount"
                                        class="form-control" placeholder="discount_amount">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Offer_type</h2>
                                <div class="mb-3">
                                    <select wire:model='offer_type' id='offer_type' class="form-control">
                                        <option value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button class="btn btn-primary">Create</button>
                    <a href="products.html" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->











</div>


@push('customJs')



   
        <script>
        let editor;
document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#description'))

        .then(function(leditor) {  // এখানে function এর সঠিক বানান

            editor = leditor;

            leditor.model.document.on('change:data', () => {  // 'çhange:data' এর পরিবর্তে 'change:data'
                @this.set('description', leditor.getData())
            });

        })

        .catch(error => {
            console.error(error);
        });
});


</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#shortdiscreiption'))


     .then(function(leditor) {  // এখানে function এর সঠিক বানান

            editor = leditor;

            leditor.model.document.on('change:data', () => {  // 'çhange:data' এর পরিবর্তে 'change:data'
                @this.set('short_description', leditor.getData())
            });

        })

            .catch(error => {
                console.error(error);
            });
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#shipping_returns'))

     .then(function(leditor) {  // এখানে function এর সঠিক বানান

            editor = leditor;

            leditor.model.document.on('change:data', () => {  // 'çhange:data' এর পরিবর্তে 'change:data'
                @this.set('shipping_returns', leditor.getData())
            });

        })



            .catch(error => {
                console.error(error);
            });
    });

</script>

    






@endpush
