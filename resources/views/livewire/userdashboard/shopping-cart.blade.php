<div>

    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Shopping Cart</h3>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartContents as $key=> $item)
                                    <tr id="cart-row-{{$key }}">
                                        <td>
                                            <?php
                                            $imageString = $item->options[0] ?? '';
                                            $imageArray = json_decode($imageString, true);
                                            ?>

                                            <div class="d-flex align-items-center justify-content-center">
                                                <img style="width: 50px; height: 50px; object-fit: cover; object-position: center;"
                                                    src="{{ !empty($imageArray[0]) ? asset('storage/ProductImage/' . $imageArray[0]) : '' }}">
                                            </div>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>${{ $item->price }}</td>

                                        <td>
                                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-dark btn-minus p-2 pt-1 pb-1 sub"
                                                        data-id="{{ $item->rowId }}">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text"
                                                    class="form-control form-control-sm border-0 text-center"
                                                    value="{{ $item->qty }}">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-dark btn-plus p-2 pt-1 pb-1 plus"
                                                        data-id="{{ $item->rowId }}">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>


                                        <td>
                                            $<span
                                                id="item-total-{{ $item->rowId }}">{{ number_format($item->price * $item->qty, 2) }}</span>
                                        </td>

                                        <td>
                                            <button data-id="{{$item->rowId}}" class="btn btn-sm btn-danger deleteBtn">
                                                <i class="fa fa-times"></i>
                                            </button>
                                          
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Summary Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Cart Summary</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Total Items:</td>
                                <td><span id="cartCount">{{ Cart::count() }}</span></td>


                            </tr>
                            <tr>
                                <td>Subtotal:</td>
                                <td>$<span id="cart-subtotal">{{ Cart::subtotal() }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><strong>Total Cost:</strong></td>
                                <td><strong>$<span id="cart-total-price">{{ Cart::subtotal() }}</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('front.contant.checkout') }}" type="button"
                        class="btn btn-primary btn-block">Proceed to Checkout</a>
                </div>
            </div>
        </div>


    </div>

</div>

@push('frontendJs')
    <script>
        $('.plus').click(function() {
            var qtyElement = $(this).parent().prev();
            var qtyValue = parseInt(qtyElement.val());
            if (qtyValue < 10) {

                qtyElement.val(qtyValue + 1);
                var rowId = $(this).data('id');
                var newQty = qtyElement.val();
                UpdateCart(rowId, newQty)
            }
        });

        $('.sub').click(function() {
            var qtyElement = $(this).parent().next();
            var qtyValue = parseInt(qtyElement.val());
            if (qtyValue > 1) {
                qtyElement.val(qtyValue - 1);

                var rowId = $(this).data('id');
                var newQty = qtyElement.val();
                UpdateCart(rowId, newQty)
            }
        });
    </script>

    <script>
        function UpdateCart(rowId, qty) {
            $.ajax({
                url: "{{ route('frontend.contant.UpdateCart') }}",
                type: 'put',
                data: {
                    rowId: rowId,
                    qty: qty
                },
                dataType: 'json',
                success: function(response) {

                    if (response.status == true) {


                        $('#item-total-' + rowId).text((parseFloat(response.itemTotal)).toFixed(2));
                      
                        $('#cart-subtotal').text((response.newSubtotal));
                        $('#cart-total-price').text((response.newSubtotal));
                        $('#cartCount').text((parseFloat(response.cartCount)).toFixed(2));



                    }

                }

            });
        }
    </script>






    <script src="{{ asset('js/sweetalert.js') }}"></script>

    <script>
        $(".deleteBtn").on('click', function() {



            let rowId = $(this).data('id');


            let deleteUrl = "{{ route('frontend.contant.deleted', ':id') }}".replace(':id', rowId);
            deleteajax(rowId, deleteUrl)



        })
    </script>



 
@endpush
