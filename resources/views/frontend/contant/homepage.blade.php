
@extends('frontend.frontend_layout.forntend_layout')



@section('content')


 <main>

        <!-- owl curusol start -->
      <div class="container-fluid">
       
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel hight">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
              
                <img src="{{asset('frontend/asset/image/carousel-2.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
               <img src="{{asset('frontend/asset/image/carousel-1.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/asset/image/carousel-2.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div class="carousel-item">
               <img src="{{asset('frontend/asset/image/carousel-1.jpg')}}" class="d-block w-100 image-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
       



       
      </div>

       <!-- owl curusol end -->



      <div class="container "   >
        <!-- Bootstrap Container -->
        <div class="row ">

          <!-- First Column (col-4) -->

         

        
          
         

        


          <!-- Second Column (col-8) -->
          <div class=" col-md-12 custom-column  overflow-auto" >

            <div class="row">

             

           

            <!-- <img class="filter" src="/svg/filter.svg" alt=""> -->

           

             

              <div class="">
                <span class="pt-4 fs-5">Clothing And Accessories</span> <span>(Showing 1  40 products of 50,123 products)</span>
              </div>
             

              

              
            

              <!-- all product -->
            

                <div class="row">
                  
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                 
                 
                  
                 
                  
                 
                 
                 


                </div>

                <!-- allproduct end -->

                <!-- future product start -->

                <h4 class="mt-2">Latest Product</h1>
                <div class="row">


                 
                  <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                    <div class="card shadow mt-3">
                      <div class="image-container">
                        <img src="{{asset('frontend/asset/image/cloth-1.jpg')}}" class="card-img-top">
                        <div class="text-overlay"><i class="fa-regular fa-heart"></i></div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">Brand Name: <span class="brand-name">আপনার ব্র্যান্ডের নাম</span></p>
                        <h5 class="card-title">Product Name</>
                        <h6>Price: <span class="price">$290 </span><span><del>$300</del></span></>

                        <!-- ratting system start -->
                        <div class="star-rating">
                         
                          <input  type="radio" id="5-stars" name="rating" value="5" />
                          <label  for="5-stars" class="star">&#9733;</label>
                          <input type="radio" id="4-stars" name="rating" value="4" />
                          <label for="4-stars" class="star">&#9733;</label>
                          <input type="radio" id="3-stars" name="rating" value="3" />
                          <label for="3-stars" class="star">&#9733;</label>
                          <input type="radio" id="2-stars" name="rating" value="2" />
                          <label for="2-stars" class="star">&#9733;</label>
                          <input type="radio" id="1-star" name="rating" value="1" />
                          <label for="1-star" class="star">&#9733;</label>
                          <span>(3)</span>
                        </div>
      
                        <!-- ratting system end -->




                        <div class="shopping d-flex flex-column gap-1  ">
                          <a id="cart" type="button" class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                          <a id="buy-now" type="button" class="btn" > <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                         


                        </div>

                      </div>
                    </div>

                    
                  </div>
                 
                 

                </div>
                <!-- future product end -->


              </div>
             
              


            </div>

        


          </div>
        </div>
      </div>



      <!-- All brand cards start -->
<div class="container-fluid mt-2 z-0">
  <p>All Brand (Showing 4 brands of 50 brands)</p>
  <div class="row">
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3 mb-3">
      <div class="card h-auto">
        <div class="row no-gutters">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/cloth-logo-3.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Brand Name:</h5>
              <p class="card-text">Title: Content is a little bit longer.</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>

   

  </div>
</div>
<!-- All brand cards end -->

<div class="container-fluid">
  <div class="row">
    <h3 class="col-12">What do you want to buy!</h3>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card">
        <div class="row no-gutters  g-0">
          <div class="col-4 d-flex align-items-center">
            <img src="../asset/image/medicine-4.jpg" class="img-fluid rounded-start w-100" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Medicine</h5>
              <p class="card-text">Content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/cloth-2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Any type of clothes</h5>
              <p class="card-text">Total clothes.</p>
          
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/girl-item-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Girl Item</h5>
              <p class="card-text">Total Girl item.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row no-gutters  g-0">
          <div class="col-4">
            <img src="../asset/image/cloth-2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Boys Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
          
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/cupple-item -1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">Couple Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
     
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12  col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new-couple.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Couple Item</h5>
              <p class="card-text">Content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new reallationship-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Relationship</h5>
              <p class="card-text">Content is a little bit longer.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-4">
            <img src="../asset/image/new reallationship-1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">New Relationship</h5>
              <p class="card-text">Content is a little bit longer.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

    


  </div>


</div>

    </main>


@endsection