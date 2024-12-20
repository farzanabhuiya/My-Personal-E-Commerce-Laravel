<div>





    @if (session('success'))
        <div class="alert alert-success w-10 h-20">
            <h4>{{ session('success') }}</h4>
        </div>
    @endif

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h1>Product</h1>
                        </div>
                        <div class="">
                            <a href="{{ route('Product.create') }}" class="btn btn-primary">New Product</a>
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
                <div class="card">

                     <div class="card-header d-flex justify-content-between">
                        <!-- Left-aligned search input -->
                        <div class="input-group" style="width: 250px;">
                            <input type="text" wire:model.live="search" class="form-control"
                                placeholder="Search Brand">
                            <div class="input-group-append">

                            </div>
                        </div>

                        <!-- Right-aligned search input -->
                        <div class="input-group" style="width: 250px;">
                            <input type="text" value="{{ $paginate}}" wire:model.live="paginate"
                                class="form-control">
                            <div class="input-group-append">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>


                                    <th>ID</th>
                                    <th width="80">Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>SKU</th>
                                    <th width="1">Status</th>
                                    <th width="1">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $products->firstItem() + $key }}</td>


                                        <td>


                                            <?php
                                            $productPhoto = json_decode($product->image, true);
                                            
                                            ?>



                                            <a href="{{ !empty($productPhoto[0])? asset('storage/ProductImage/' . $productPhoto[0]):"" }}"
                                                target="_blank"> <img
                                                    src="{{ !empty($productPhoto[0])? asset('storage/ProductImage/' . $productPhoto[0]): "" }}"
                                                    class="img-thumbnail" width="50"> </a>







                                        </td>

                                        <td><a href="#">{{ $product->title }}</a></td>
                                        <td>{{ $product->price }}</td>
                                        {{-- <td>10 left in Stock</td>
                                <td>UGG-BB-PUR-06</td>											 --}}

                                        <td>{{ $product->qty }} left in Stock</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>
                                            @if ($product->status == 1)
                                                <svg wire:click='toggleStatus({{ $product->id }})'
                                                    class="text-success-50 text-success"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            @else
                                                <svg wire:click='toggleStatus({{ $product->id }})'
                                                    class="text-danger " xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            @endif
                                        </td>
                                        <td>


                                            <a href="{{ route('Product.edit', $product->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                </svg>
                                            </a>


                                            <a href="#"  data-id="{{ $product->id }}" class=" deleteBtn text-danger w-4 h-4 mr-1 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi text-danger bi-trash deleteBtn"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                      {{ $products->links() }}
                    </div>

                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>


    @push('customJs')
        <script>
            $(".deleteBtn").on('click', function() {

                let productId = $(this).data('id');
                var deleteUrl = "{{ route('Product.delete', ':id') }}".replace(':id', productId);
                deleteajax(productId, deleteUrl)



            })




            {{-- sweetalert --}}
            showToast('Status updated successfully!')
        </script>
    @endpush





</div>
