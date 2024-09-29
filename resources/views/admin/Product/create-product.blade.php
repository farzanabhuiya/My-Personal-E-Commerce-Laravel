@extends('admin.dashbord_layout.dashbord_layout')
@section('content')
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
                        <a href="{{route('Product.index')}}" class="btn btn-primary">Back</a>
                    </div>
                   </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title">Title</label>
                                            <input value="{{ old('title') }}" name='title' type="text" id="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" class="ckeditor">{{ old('description') }}</textarea>


                                            @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>




                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="shortdiscreiption">Short Discription</label>
                                            <textarea name='short_discreiption' id="shortdiscreiption" class="summernote" placeholder="Short Discreiption">{{ old('short_discreiption') }}</textarea>
                                            @error('short_discreiption')


                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="short_description">Returns</label>
                                            <textarea name='shipping_returns' id="shipping_returns" class="summernote" placeholder="shipping_returns">{{ old('shipping_returns') }}</textarea>
                                            @error('shipping_returns')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div>

                            <label for="imageUpload"> Product Image</label></br>
                            <input type="file" name="Product_image[]" hidden id="imageUpload" multiple accept="image/*" multiple>
                            


                            <img src="https://api.dicebear.com/9.x/adventurer-neutral/svg?seed=Felix" alt="image" id="imagePreview2"  width="100px" class="my-2 rounded"></br>
                            <div id="imagePreview" ></div>
                            @error('Product_image')
                            <span class="error text-danger">{{ $message }}</span>
                            @enderror


                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Pricing</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="price">Price</label>
                                            <input type="number" min="0" name='price' id="price" class="form-control" placeholder="Price">
                                             @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="compare_price">Compare at Price</label>
                                            <input type="number" name='compare_price' id="compare_price" class="form-control" placeholder="Compare Price">
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
                                            <input type="text" name='sku' id="sku" class="form-control" placeholder="sku">
                                            @error('sku')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="barcode">Barcode</label>
                                            <input type="text" name='barcode' id="barcode" class="form-control" placeholder="Barcode">
                                            @error('barcode')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input name='track_qty' class="d-none" type="text" value="no">
                                                <input name='track_qty' class="custom-control-input" type="checkbox" id="track_qty" value="yes" name="track_qty">
                                                <label for="track_qty" class="custom-control-label">Track
                                                    Quantity</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input name='qty' type="number" min="0" id="qty" class="form-control" placeholder="Qty">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Related products</h2>
                                <div class="mb-3">
                                    <select multiple name="realted_product[]" class=" related_product" id="product-select">

                          


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
                                    <select name='status' id="status" class="form-control">
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
                                    <select name='categorie_id' id="categorie_id" class="form-control categorySelect ">
                                        @forelse ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                                        @empty
                                        <option disabled selected>No catrgory found</option>
                                        @endforelse

                                    </select>
                                      @error('categorie_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category">Sub category</label>
                                    <select name='subcategorie_id' id="sub_category" class="form-control subcategorieSelect">
                                        <option disabled selected>Select SubCategory </option>

                                    </select>
                                      @error('subcategorie_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product brand</h2>
                                <div class="mb-3">

                                    <select name='brand_id' id="brand_id" class="form-control">
                                        @forelse ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                                        @empty
                                        <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                      @error('brand_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Item</h2>
                                <div class="mb-3">

                                    <select name='item_id' id="item_id" class="form-control">
                                        @forelse ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>

                                        @empty
                                        <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>

                                      @error('item_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Sizes</h2>
                                <div class="mb-3">
                                    <select name='productsize_id' id="productsize_id" class="form-control">
                                        @forelse ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->size }}</option>

                                        @empty
                                        <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>

                                      @error('productsize_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Product Colour</h2>
                                <div class="mb-3">
                                    <select name='productcolour_id' id="productcolour_id" class="form-control">
                                        @forelse ($colours as $colour)
                                        <option value="{{ $colour->id }}">{{ $colour->colour }}</option>

                                        @empty
                                        <option disabled selected>No brand found</option>
                                        @endforelse
                                    </select>
                                      @error('productcolour_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Featured product</h2>
                                <div class="mb-3">
                                    <select name='is_featured' name="is_featured" id="status" class="form-control">
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
                                    <input type="number" min="0" name='discount_amount' id="discount_amount" class="form-control" placeholder="discount_amount">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Discount_type</h2>
                                <div class="mb-3">
                                    <select name='discount_type' id='discount_type' class="form-control">
                                        <option selected value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Offer_Amount</h2>
                                <div class="mb-3">
                                    <input type="number" min="0" name='offer_amount' id="offer_amount" class="form-control" placeholder="discount_amount">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Offer_type</h2>
                                <div class="mb-3">
                                    <select name='offer_type' id='offer_type' class="form-control">
                                        <option selected value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button type="submite" class="btn btn-primary">Create</button>
                    <a href="products.html" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->


</div>
@endsection


@push('customJs')

<script>
    $('.categorySelect').change(getSubcategories)

    function getSubcategories() {
        $.ajax({
            url: `{{ route('Subcategorie.get') }}`
            , method: 'get'
            , data: {
                categoryId: $(this).val()
            }
            , success: function(res) {
                let options = []

                if (res.length > 0) {

                    res.forEach(subcategorie => {
                        let optionTag =
                            `<option value ='${subcategorie.id}'>${subcategorie.name}</option>`
                        options.push(optionTag)
                    })
                    $('.subcategorieSelect').html(options)

                } else {

                    let optionTag = `<option value="" disable selected>Subcategories has been no found </option>`
                    $('.subcategorieSelect').html(optionTag)
                }

            }
        });
    };

</script>











<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#shortdiscreiption'))
            .catch(error => {
                console.error(error);
            });
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#shipping_returns'))
            .catch(error => {
                console.error(error);
            });
    });

</script>





<script>
    $(document).ready(function() {


        $('.related_product').select2({

       
            ajax: {
                url: "{{ route('get.Product.related') }}"
                , dataType: 'json',

                tags: true
                , multiple: true
                , minimumInputLength: 3
                , processResults: function(data) {
                    return {
                        results: data.tags
                    };
                }
            }
        });
    })

</script>





{{-- Image upload --}}



<script>
    document.getElementById('imagePreview2').addEventListener('click', function() {
        document.getElementById('imageUpload').click();
    });






    document.getElementById('imageUpload').addEventListener('change', function(event) {
        let imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // পুরানো প্রিভিউ মুছে ফেলার জন্য
        let files = Array.from(event.target.files);
        let deletedIndexes = []; // ডিলিট করা ফাইলগুলোর ইনডেক্স রাখার জন্য

        files.forEach(function(file, index) {
            if (file.type === 'image/jpeg' || file.type === 'image/png') {
                let reader = new FileReader();

                reader.onload = function(e) {
                    // ইমেজ কন্টেইনার তৈরি করা
                    let imgContainer = document.createElement('div');
                    imgContainer.style.display = 'inline-block';
                    imgContainer.style.position = 'relative';
                    imgContainer.style.margin = '10px';

                    let imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.style.width = '100px';
                    imgElement.style.height = '100px';
                    imgElement.style.objectFit = 'cover';
                     imgElement.classList.add('rounded');


                    // ডিলিট বাটন তৈরি করা
                    let deleteButton = document.createElement('button');
                    deleteButton.innerText = '✖';
                    deleteButton.style.position = 'absolute';
                    deleteButton.style.top = '0';
                    deleteButton.style.right = '0';
                    deleteButton.style.background = 'red';
                    deleteButton.style.color = 'white';
                    deleteButton.style.border = 'none';
                    deleteButton.style.cursor = 'pointer';

                    // ডিলিট বাটনে ক্লিক করলে
                    deleteButton.addEventListener('click', function() {
                        // প্রিভিউ থেকে রিমুভ করা
                        imgContainer.remove();

                        // ডিলিট হওয়া ফাইলের ইনডেক্স যোগ করা
                        deletedIndexes.push(index);

                        // নতুন FileList তৈরি করে ইনপুট ফিল্ডে সেট করা
                        let newFileList = new DataTransfer();
                        files.forEach((f, i) => {
                            // যদি ফাইলটি ডিলিট না করা হয়ে থাকে, তাহলে সেটি নতুন FileList-এ যোগ করা হবে
                            if (!deletedIndexes.includes(i)) {
                                newFileList.items.add(f);
                            }
                        });
                        document.getElementById('imageUpload').files = newFileList.files;
                    });

                    // ইমেজ এবং ডিলিট বাটন কন্টেইনারে যোগ করা
                    imgContainer.appendChild(imgElement);
                    imgContainer.appendChild(deleteButton);
                    imagePreview.appendChild(imgContainer);
                };

                reader.readAsDataURL(file);
            } else {
                alert(file.name + ' is not a valid image format (only .jpg and .png are allowed).');
            }
        });
    });

</script>



@if (session('messaeg'))
<script>
    showToast2('hello')

</script>
@endif
@endpush
