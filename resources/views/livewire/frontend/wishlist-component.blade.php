<div>


    <main>
     
    
        <section class=" section-11 ">    
            <div class="container  mt-5">
                <form method="post" id="wishlist" name="wishlist">
                 
                <div class="row">
    
    
    
 
    
            
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5 mb-0 pt-2 pb-2">My Wishlist</h2>
                            </div>
                            <div class="card-body p-4">
                                @foreach ($wishlists as $wishlist )
                                    
                               
                                <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" style="width: 10rem;"><img src="" alt="Product"></a>
                                        <div wire:model="addWishlist" class="pt-2">
                                            <h3 class="product-title fs-base mb-2"><a href=""></a>{{$wishlist->product->title}}</h3>                                        
                                            <div class="fs-lg text-accent pt-2">
                                                <span class="h5"><strong>${{$wishlist->product->price}}</strong></span>
                                    
                                   
                                                <span class="h6 text-underline"><del>$</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                                        <button class="btn btn-outline-danger btn-sm" type="button"><i class="fas fa-trash-alt me-2"></i>Remove</button>
                                    
                                          </div>
                                    </div>
                                </div>  
                                @endforeach
                           
                                
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            
    
        </section>
    </main>




</div>
