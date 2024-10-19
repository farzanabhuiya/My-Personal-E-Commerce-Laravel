@extends('frontend.frontend_layout.forntend_layout')
@section('content')
    


<main>
     
 
    <section class=" section-11 ">    
        <div class="container  mt-5">
            <form action="{{route('front.contant.Wishlist')}}" method="post" id="wishlist" name="wishlist">
             
            <div class="row">





        
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5 mb-0 pt-2 pb-2">My Wishlist</h2>
                        </div>
                        @foreach ($wishlists as $wishlist )
                        <div class="card-body p-4">
                           
                                
                           
                            <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                                @php
                                $images = json_decode($wishlist->product->image);
                             
                                   @endphp
                                <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" >
                                    <img style="width: 200px;height:100px object-fit:cover;obect-position:center;"  src="{{asset('storage/ProductImage/'.$images[0])}}"alt="Product"></a>
                                    <div  class="pt-2">
                                        <h3 class="product-title fs-base mb-2"><a href=""></a>{{$wishlist->product->title}}</h3>                                        
                                        <div class="fs-lg text-accent pt-2">
                                            <span  class="h5"><strong>${{$wishlist->product->price}}</strong></span>
                                
                               
                                            <span class="h6 text-underline"><del>${{$wishlist->product->compare_price}}</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="removeWishlist({{ $wishlist->product_id}});" class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center deleteBtn">
                                
                                    <button  class="btn btn-outline-danger btn-sm deleteBtn" id="deleteBtn" type="submit"><i class="fas fa-trash-alt me-2"></i>Remove</button>
                                  
                                     
                                      </div>
                                </div>
                                @endforeach
                            </div>  
                          
                       
                            
                        </div>
                      
                    </div>
                </div>
            </div>
            </form>
        </div>
        

    </section>
</main>





@push('frontendJs')
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    $('.deleteBtn').click(function (event){
      event.preventDefault()
        Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
       $(this).next('form').submit()
      }
    });
    
    });
    
        </script> --}}




<script >
    function removeWishlist(id){
     $.ajax({
         url:"{{route('front.contant.removeWishlist')}}",
         type:'post',
         data:{id:id},
         dataType:'json',
         success:function(response){
             if(response.status == true){
                 alert(response.message);
              
                 window.location.href="{{route('front.contant.Wishlist')}}";
             }
 
         }
     })
    }
 </script>
@endpush

@endsection