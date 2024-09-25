
@extends('frontend.frontend_layout.forntend_layout')
@section('content')


<main>
  

    <!-- main section start -->
    
    <div class="container mt-1 pt-1" id="containerr">
       <div class="card p-4 wrapper">
        <div class="row">

          {{-- @foreach ($products as $product)  --}}
          <div class=" col-12 col-sm-6 col-md-5 col-lg-4 custom-column card">
            <div class="slider-container d-flex gap-2 justify-content-between align-items-center ">
              @foreach ($products as $product)  
              <div class="carousel-nav w-25">
                
                 @php
                      $images = json_decode($product->image);
                   
                         @endphp
                          @foreach($images as $image)
                      <div class="carousel-cell mb-2"><img  src="{{asset('storage/ProductImage/'.$images[0])}}"  alt="" class="img-fluid"></div>
                      @endforeach
                     
                    </div>


                  <div class="main-carousel w-75 mr-3">
                         @php
                          $images = json_decode($product->image);
                           @endphp


                  
                      <div class="carousel-cell"><img src="{{asset('storage/ProductImage/'.$images[0])}}"alt="Image 1" class="img-fluid"></div>
                      
                  </div>
          </div>
       
            
          </div>

          
          

          <div class="col-12 col-sm-6 col-md-7 col-lg-8  custom-column ">
           
                
            {{-- @foreach ($products as $product) --}}
              <div class="card p-3">
             
                  <h6 class="title">Brand name: <span class="brand-name">{{$product->brand_id}}</span></h6>
                  <h6>Title : {{$product->title}}</h6>
                  <h4>Spiceal Price:</h4>


                  
                  
                  
                    <div class="star-rating">
                        <input type="radio" id="5-stars" name="rating" value="5" />
                        <label for="5-stars" class="star">&#9733;</label>
                        <input type="radio" id="4-stars" name="rating" value="4" />
                        <label for="4-stars" class="star">&#9733;</label>
                        <input type="radio" id="3-stars" name="rating" value="3" checked />
                        <label for="3-stars" class="star">&#9733;</label>
                        <input type="radio" id="2-stars" name="rating" value="2" />
                        <label for="2-stars" class="star">&#9733;</label>
                        <input type="radio" id="1-star" name="rating" value="1" />
                        <label for="1-star" class="star">&#9733;</label>
                    </div>
            





                  
                  <div> 
                      <span class="price">${{$product->price}} </span><span><del>${{$product->compare_price}}</del></span>
                  </div>

                  <div>
                      <p>Cash on Delivery available</p>
                  </div>

                 <div>
                  <button id="cart" type="button" class="btn ">Add to Cart</button>
                          <button id="buy-now" type="button" class="btn">buy now</button>
                 </div>


                </div>
               
          </div>
          @endforeach

           <!--  Comments Section start -->
           <div class="mt-4">
            <h5>Comments  ({{ $product->totalComments }})</h5>
            <div class="media mb-3">
              @foreach ( $product->comments as $cmt)
                
              <img  style="width: 50px;height:40px object-fit:cover;obect-position:center;" src="{{ $cmt->user->profile_img ? asset ('storage/users/' . $cmt->user->profile_img) : env('AVATAR_API').$cmt->user->name }}" alt="User Image" />
                
                <div class="media-body">
                    <h6 class="mt-0">{{$cmt->user->name}}</h6>
                    <p>{{$cmt->comment}}</p>
                    <div class="mt-2">
                        <a href="#comment-form" data-parent-id="{{$cmt->id}}" data-name="{{$cmt->user->name}}" class="btn btn-sm btn-outline-primary replyBtn " data-toggle="collapse" data-target="#reply1" aria-expanded="false" aria-controls="reply1">Reply</a>
                    </div>
                  </div>
                    <!-- Reply Form -->
                    {{-- <div class="collapse mt-2" id="reply1">
                        <div class="card card-body">
                            <form>
                                <div class="form-group">
                                    <label for="replyTextarea1">Your Reply</label>
                                    <textarea class="form-control" id="replyTextarea1" rows="2" placeholder="Replay here...."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit Reply</button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- Replies -->

                    @if (count($cmt->replies) >0)
								
							
                       @foreach ($cmt->replies as $reply )

                    <div class="media mt-3 right">
                        <a class="pr-3" href="#">
                          <img  style="width: 50px;height:40px object-fit:cover;obect-position:center;" src="{{ $reply->user->profile_img ? asset ('storage/users/' . $reply->user->profile_img) : env('AVATAR_API').$reply->user->name }}" alt="User Image" />
                        </a>
                        <div class="media-body">
                            <h6 class="mt-0">{{$reply->user->name}}</h6>
                            <p>{{$reply->comment}}</p>
                            <div class="mt-2">
                              <a href="#comment-form" data-parent-id="{{$reply->id}}" data-name="{{$reply->user->name}}" class="btn btn-sm btn-outline-primary replyBtn " data-toggle="collapse" data-target="#reply1" aria-expanded="false" aria-controls="reply1">Reply</a>
                          </div>
                        </div>
                    </div>
                    @include('frontend.utility.comment')
                    @endforeach
                    @endif
             
                @endforeach
              </div>
            <!-- Add Comment Form -->
            @auth
            <form id="comment-form"  method="post" action="{{ route('frontend.contant.commentStore') }}">
              @csrf
              <input type="hidden" name="product_id"  value="{{$product->id}}">
							<input type="hidden" name="parent_id" value="">
                <div class="form-group">
                    <label class="commentTitle" for="commentTextarea">Add a Comment</label>
                    <textarea name="comment" class="form-control" id="commentTextarea" rows="3" placeholder="Comment Heare....."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>
            
        </div>
        @endauth
        @guest
        <h6>please <a href=" {{ route('login')}}">Login</a> First</h6>
      @endguest

            
           <!--  Comments Section end -->





      </div>
       </div>
        
       
        
        

    </div>
    <div class="line"></div>
    

    <!-- all Brand start -->
    <div class="line"></div>
    <div class="container-fluid custom-container" id="containerr">
        <div class="row">
             <h1>Related Product</h1>
             <div class="row">

            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>
            <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-3 ">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8 ">
                        <div class="card-body">
                          <h5 class="card-title">Brand Name</h5>
                          <p class="card-text">Available Item</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                
                
            </div>


            
            
        </div>

            
        </div>

    </div>

  </main>





  
@push('frontendJs')

<script>
	function replyingComment (){
		let userName = $(this).attr('data-name')
		let parentId = $(this).attr('data-parent-id')
		$('input[name="parent_id"]').val(parentId)
        $('.commentTitle').html(`Replying to ${userName}`)

	}
	$('.replyBtn').click(replyingComment)
	
</script>
@endpush
@endsection