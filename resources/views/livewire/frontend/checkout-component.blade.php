<div>
  


    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <div class="light-font">
                    <ol class="breadcrumb primary-color mb-0">
                        <li class="breadcrumb-item"><a class="white-text" href="{{route('frontend.contant.homepage')}}">Home</a></li>
                        <li class="breadcrumb-item"><a class="white-text" href="#">Product Details</a></li>
                        <li class="breadcrumb-item">Checkout</li>
                    </ol>
                </div>
            </div>
        </section>
    
        <section class="section-9 pt-4">
            <div class="container">
                <div class="row">
                    {{-- <form  wire:submit.prevent="processCheckout" method="post" > --}}
                     
                    <div class="col-md-8">
                        <div class="sub-title">
                            <h2>Shipping Address</h2>
                        </div>
                        <div class="card shadow-lg border-0">
                            <div class="card-body checkout-form">
                                <div class="row">
                                    <form  wire:submit.prevent="processCheckout" method="post" >
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" wire:model='first_name'  id="first_name" class="form-control"  placeholder="First Name">
                                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>            
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" wire:model='last_name'  id="last_name" class="form-control" placeholder="Last Name">
                                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>            
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" wire:model='email' id="email" class="form-control" placeholder="Email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>            
                                    </div>
    
                                     <div class="col-md-12">
                                        <div class="mb-3">
                                            <select wire:model='district'  id="district" class="form-control">
                                                <option value="">Select a Country</option>
                                                {{-- @forelse($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                
                                                @empty
                                             
                                         @endforelse 
                                         <option value="rest">Rest the world</option> --}}
                                         @forelse ($districts as $district )
                                               <option {{(!empty($CustomerAddersse) && $CustomerAddersse->district_id == $district->id)? 'selected' : ""}} value="{{$district->id}}">{{$district->district_name}}</option>
                                  
                                         @empty
                                             
                                         @endforelse 
                                         <option value="rest">Rest the world</option>
                                               
                                            </select>
                                            @error('district') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>            
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea wire:model='address'id="address" cols="30" rows="3" placeholder="Address" class="form-control"></textarea>
                                        </div>            
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" wire:model='appartment' id="appartment" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                        </div>            
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" wire:model='city' id="city" class="form-control" placeholder="City">
                                        </div>            
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" wire:model='state'  id="state" class="form-control" placeholder="State">
                                        </div>            
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" wire:model='zip'  id="zip" class="form-control" placeholder="Zip">
                                        </div>            
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" wire:model='mobile'  id="mobile" class="form-control" placeholder="Mobile No.">
                                            @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>            
                                    </div>
                                    
    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <textarea wire:model='order_notes'  id="order_notes" cols="30" rows="2" placeholder="Order Notes (optional)" class="form-control"></textarea>
                                        </div>            
                                    </div>
    
                                {{-- </form> --}}
                               
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4">
                        <div class="sub-title">
                            <h2>Order Summery</h3>
                        </div>                    
                        <div class="card cart-summery">
                            <div class="card-body">
                                @foreach ($cartContents as $item)
                                <div class="d-flex justify-content-between pb-2">
                                    <div class="h6">{{$item->name}} X {{$item->qty}}</div>
                                    <div class="h6">{{$item->price*$item->qty}}</div>
                                    <div class="h6"></div>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-between summery-end">
                                    <div class="h6"><strong>Subtotal</strong></div>
                                    <div class="h6"><strong>${{Cart::SubTotal()}}</strong></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="h6"><strong>Shipping</strong></div>
                                    <div class="h6"><strong>$0</strong></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="h6"><strong>discount</strong></div>
                                    <div class="h6"><strong>$0</strong></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2 summery-end">
                                    <div class="h5"><strong>Total</strong></div>
                                    <div class="h5"><strong>${{Cart::SubTotal()}}</strong></div>
                                </div>                            
                            </div>
                        </div>   
                        
                        {{-- <div class="card payment-form ">                        
                            <h3 class="card-title h5 mb-3">Payment Details</h3>
                            <div class="card-body p-0">
                                <div>
                           
                                    <input type="radio"  wire:model="payment_method" value="cod" id="payment_method_one">
                                    <label for="payment_method_one">Cash on Delivery</label>
        
                                </div>

                                <div class="mb-3">
                                    <label for="card_number" class="mb-2">Card Number</label>
                                    <input type="text" name="card_number" id="card_number" placeholder="Valid Card Number" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="expiry_date" class="mb-2">Expiry Date</label>
                                        <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expiry_date" class="mb-2">CVV Code</label>
                                        <input type="text" name="expiry_date" id="expiry_date" placeholder="123" class="form-control">
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <a href="#" class="btn-dark btn btn-block w-100">Pay Now</a>
                                </div>
                            </div>                        
                        </div> --}}




                        <div class="card payment-form "> 
                            <h3 class="card-title h5 mb-3">Payment Method</h3> 
                            <div>
                               
                                <input type="radio" wire:model="payment_method" checked name="payment_method_1" value="cod" id="payment_method_one">
                                <label for="payment_method_one">Cash on Delivery</label>
    
                            </div>
    
                            <div>
                               
                                <input type="radio"  name="payment_method_1" value="COD" id="payment_method_tow">
                                <label for="payment_method_tow">Strip</label>
    
                            </div>
                      
                        <div class="card-body p-0 d-none "  id="card-payment-form">
                            <div class="mb-3">
                                <label for="card_number" class="mb-2">Card Number</label>
                                <input type="text" name="card_number" id="card_number" placeholder="Valid Card Number" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">Expiry Date</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="expiry_date" class="mb-2">CVV Code</label>
                                    <input type="text" name="expiry_date" id="expiry_date" placeholder="123" class="form-control">
                                </div>
                            </div>
                         
                        </div>  
                        <div class="pt-4">
                           
                            <button type="submit" class="btn-dark btn btn-block w-100">Pay Now</button>
                        </div>                       
                    </div>
    
                              
                        <!-- CREDIT CARD FORM ENDS HERE -->
                        
                    </div>
                
                    {{-- @else
                    <p>Your cart is empty</p>
                @endif --}}
                
            </form>
                </div>
            </div>
        </section>
    </main>


</div>




@push('customJs')
<script>
    $('#payment_method_one').click(function(){
       if( $(this).is(':checked')==true){

            $('#card-payment-form').addClass('d-none');

       }
    });



    $('#payment_method_tow').click(function(){
       if( $(this).is(':checked')==true){

            $('#card-payment-form').removeClass('d-none');

       }
    });



</script>

@endpush
