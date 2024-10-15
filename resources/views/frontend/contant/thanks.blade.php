
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <br><br>
    <div>
      <h2>Thanks Your for Order!</h2>
      <h2>order:{{$orderId}}</h2>
    </div>
  

    <main>


      <section class="section-9 pt-4">
          <div class="container">
              <div class="row">
                     <div class="col-md-8">       
                      <div class="card shadow-lg border-0">
                          <div class="card-body checkout-form">
                              
                              <div class="sub-title">
                                  <h2>Order Deails</h2>
                              </div>
                              <hr>
                              <hr>
                           
                              <div class="row">
                                  
                                  <div class="col-md-12">
                                      <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder=" Name">
                                        
                                      </div>            
                                  </div>
                                  <div class="col-md-12">
                                      <div class="mb-3">
                                          <input type="text"  class="form-control" placeholder=" Email">
                                         
                                      </div>            
                                  </div>
                                  
                                  <div class="col-md-12">
                                      <div class="mb-3">
                                          <input type="text"  class="form-control" placeholder="Email">
                                  
                                      </div>            
                                  </div>
  
                                  <div class="col-md-12">
                                      <div class="mb-3">
                                          <input type="text" value="{{ $order->customer_email }}" class="form-control" placeholder="Email">
                                  
                                      </div>            
                                  </div>
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <input type="text"  value="{{ $order->city }}" class="form-control" placeholder="City">
                                      </div>            
                                  </div>
  
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="State">
                                      </div>            
                                  </div>
                                  <div class="image-container">
                                            
                                             <img style="width: 400px;height:300px object-fit:cover;obect-position:center;"
                                              src="image" class="card-img-top">
              
                                      <div class="text-overlay"> <i class="fa-regular fa-heart"></i></div>
                                    </div>
                             
                              </div>
  
  
                                  <!-- Example Card History Entry -->
                                  
                                     
                                          {{-- <h5 class="card-title">Order #12345</h5>
                                          <p class="card-text">Product: Example Product 1</p>
                                          <p class="card-text">Date: 2024-05-01</p>
                                          <p class="card-text">Price: $49.99</p>
                                          <p class="card-text">Status: Delivered</p> --}}
                                      
                                
                         
                              
                          </div>
                      </div>    
                  </div>
  
   
  
                  <div class="col-md-4">                   
                      <div class="card cart-summery">
                          <div class="card-body">
                              
                              <div class="sub-title">
                                  <h2>Order details</h3>
                              </div> 
                              <hr>
                             
                        
                           
                              @foreach($order->orderitems as $item)
                              <div class="d-flex justify-content-between pb-2">
                                  <div class="h6">{{ $item->name }} x {{ $item->qty }}</div>
                                  <div class="h6">${{ $item->price * $item->qty }}</div>
                              </div>
                            @endforeach
                            <hr>

                              <div class="d-flex justify-content-between summery-end">
                                  <div class="h6"><strong>Subtotal</strong></div>
                                  <div class="h6"><strong>${{ $order->subtotal }}</strong></div>
                              </div>
                              <div class="d-flex justify-content-between mt-2">
                                  <div class="h6"><strong>Shipping</strong></div>
                                  <div class="h6"><strong>${{ $order->shipping }}</strong></div>
                              </div>
                              <div class="d-flex justify-content-between mt-2">
                                  <div class="h6"><strong>Discount</strong></div>
                                  <div class="h6"><strong>${{ $order->discount }}</strong></div>
                              </div>
                              <hr>
                              <div class="d-flex justify-content-between mt-2 summery-end">
                                  <div class="h5"><strong>Total</strong></div>
                                  <div class="h5"><strong>${{$order->grand_total}}</strong></div>
                              </div>                            
                          </div>
                      </div>       
  
                            
                      <!-- CREDIT CARD FORM ENDS HERE -->
                      
                  </div>
        
              </div>
          </div>
      </section>
  </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
