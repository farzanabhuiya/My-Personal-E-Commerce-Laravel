<div>
    {{-- The Master doesn't talk, he acts. --}}




    <main>

       











      <div class="container pt-6">

        

        <div class="wrapper">

       

          <div  class="row mb-4    ">

            <div id="filter-card" class=" filter-card  d-lg-block col-lg-3 filter-slide ">

              

          

              <div id="" class="card  p-4" style="height:auto;">

                <div class="d-flex justify-content-start text-end d-lg-none d-md-block">
                  <button id="filter_slide"  class="btn btn-primary"><img  src="/svg/filter.svg" alt="" width="30px"></button>
                  
                </div>

                
                  <div class="card mt-3 ">
                    
                      <span>
                        <a class="btn  m-2" type="button" data-bs-toggle="collapse" data-bs-target="#Discount" aria-expanded="false" aria-controls="collapseExample">
                          Discount
                            <i class="fas fa-chevron-down" id="toggle-icon"></i>
                           
                        </a>
                    </span>
              

                    
               
                    <div class="collapse" id="Discount">
                        <div class=" card-body">
                      
                         
                         <input type="checkbox" wire:model.lazy="selectedDiscounts" value=0> 0-10%<br>
                          <input type="checkbox" wire:model.lazy="selectedDiscounts" value=10> 10-20%<br>
                          <input type="checkbox" wire:model.lazy="selectedDiscounts" value=30> 20-30%<br>
                          <div>
                           
                            <pre>{{ print_r($selectedDiscounts) }}</pre>
                          
                        </div>



                        {{-- <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Discount </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Discount </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Discount </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Discount </label>
                        </div> --}}
                         
                        </div>
                    </div>
          
                    </div>

                    <div class="card mt-3 ">

                      <span>
                        <a class="btn  m-2" type="button" data-bs-toggle="collapse" data-bs-target="#Brand" aria-expanded="false" aria-controls="collapseExample">
                         All Brand
                            <i class="fas fa-chevron-down" id="toggle-icon"></i>
                           
                        </a>
                    </span>
        
                  </hr>
                    <div class="collapse" id="Brand">
                        <div class=" card-body">
                          @foreach($brands as $brand) 
                        <div>
                          <input type="checkbox" wire:model="selectedBrands" id="brand" value="{{ $brand->id }}">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">{{$brand->name}} </label>
                        </div>
                        @endforeach
                        
                 
                         
                        </div>
                    </div>
          
                    </div>    


                    <div class="card mt-3 ">

                      <span>
                        <a class="btn  m-2" type="button" data-bs-toggle="collapse" data-bs-target="#Offer" aria-expanded="false" aria-controls="collapseExample">
                         All Offer
                            <i class="fas fa-chevron-down" id="toggle-icon"></i>
                           
                        </a>
                    </span>
        
               
                    <div class="collapse" id="Offer">
                        <div class=" card-body">
                          
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Brand </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Brand </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Brand </label>
                        </div>
                        <div>
                          
                          <input type="checkbox" id="brand">
                          <label class="form-check-label" for="flexCheckDefault" for="brand">All Brand </label>
                        </div>
                         
                        </div>
                    </div>
          
                    </div>

<!-- range -->

                    <div class="card mt-3 ">

                     <div class="p-1">
                      <label for="customRange2" class="form-label mt-3">Price</label>
                      <input type="text" class="js-range-slider brandvalu " name="my_range" value="" />
                     </div>
          
                    </div>

<!-- range end -->





              </div>

            </div>





              <div class=" col-md-12 col-lg-9 m-auto  card  pb-3" >

                <div class="d-flex justify-content-end text-end d-lg-none d-md-block">
                  <button id="filter_slide"  class="btn btn-primary"><img  src="/svg/filter.svg" alt="" width="30px"></button>
                </div>
                  
                <div class="row m-auto">

                  

                  

               

                  @foreach ($subcategoryProducts as $subcategoryProduct)
                  @foreach ($subcategoryProduct->product as $product)
                  <div class="col-12 col-sm-6 col-md-4  col-xl-3">
                  
                    <div class="card shadow mt-3">  
                      <div class="image-container">
                        @php
                        $images= json_decode($product->image);
                      @endphp
                        <img src="{{asset('storage/ProductImage/'.$images[0])}}" class="card-img-top"> 

                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">{{$product->brand->name}}</span></p>
                        <h5 class="card-title">Product Name::{{$product->title}}</h5>
                        <p class="card-text">Price: <span class="price">${{$product->price}}</span><span><del>${{$product->compare_price}}</del></span></p>
                        <div class="d-flex justify-content-between">
                          <a  href="javascript: void(0)" onclick="AddCart({{$product->id}})" id="cart" type="button" class="btn">Add to Cart</a>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                        </div>
                      </div>
                    </div>
                   
                  </div>

  
                  @endforeach
                 @endforeach


      

                </div>
      
                 


              </div>




          </div>

        </div>




      </div>



      
      <div class="container">
       
          
      
        <h4>Future Product </h4>
       
        <div class="card p-2 mb-3">
           @foreach ($FutureProducts as $FutureProduct) 
          <div class="col-12 col-sm-6 col-md-3  col-xl-3">
            {{-- //@foreach ($FutureProducts as $FutureProduct) --}}
            <div class="card shadow mt-3">
              <div class="image-container">
                @php
                $images= json_decode($FutureProduct->image);
              @endphp
                <img src="{{asset('storage/ProductImage/'.$images[0])}}" class="card-img-top">
                <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
              </div>
              <div class="card-body">
                <p class="card-text">Brand Name: <span class="brand-name">{{$FutureProduct->brand->name}}</span></p>
                <h5 class="card-title">Product Name:{{$FutureProduct->title}}</h5>
                <p class="card-text">Price: <span class="price">${{$FutureProduct->price}} </span><span><del>${{$FutureProduct->compare_price}}</del></span></p>
                <div class="d-flex justify-content-between">
                  <a  href="javascript: void(0)" onclick="AddCart({{$product->id}})" id="cart" type="button" class="btn">Add to Cart</a>
                  <button id="buy-now" type="button" class="btn">buy now</button>
                </div>
              </div>
              {{-- @endforeach --}}
            </div>
          
            {{-- @endforeach --}}
          
          </div>
          @endforeach
        </div>
    
      </div>

  </main>




    


</div>
