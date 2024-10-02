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
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>  Quantity</th>  
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartContents as $item)
                                        
                                           
                                            <!-- Example Product Row -->
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>${{$item->price}}</td>
                                                {{-- <td>  {{$item->qty}}</td> --}}

                                                <td>
                                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-dark btn-minus p-2 pt-1 pb-1 sub" >
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" class="form-control form-control-sm  border-0 text-center"value="{{$item->qty}}">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-dark btn-plus p-2 pt-1 pb-1 add" >
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $ {{$item->price*$item->qty}}
                                                 </td>
                                               
                                            </tr>
                                            
                                            <!-- Add more product rows as needed -->
                                        </tbody>
                                        @endforeach
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
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal:</td>
                                            <td>${{Cart::subtotal()}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Delivery Charge:</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge:</td>
                                            <td>$10.00</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><strong>Total Cost:</strong></td>
                                            <td><strong>${{Cart::subtotal()}}</strong></td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                                <button type="button" class="btn btn-primary btn-block">Proceed to Checkout</button>
                            </div>
                        </div>
                    </div>

                 </div>

</div>
