
@extends('frontend.frontend_layout.forntend_layout')
@section('content')


<main>
  

    <!-- main section start -->
    
    <div class="container mt-1 pt-1" id="containerr">
       <div class="card p-4 wrapper">
        <div class="row">

          
          <div class=" col-12 col-sm-6 col-md-5 col-lg-4 custom-column card">
            <div class="slider-container d-flex gap-2 justify-content-between align-items-center ">
              @foreach ($products as $product)
              
              {{-- onek pic aksathe --}}
              <div class="carousel-nav w-25">
                 @php
                      $images = json_decode($product->image);
                   
                         @endphp
                          @foreach($images as $image)
                      <div class="carousel-cell mb-2"><img  src="{{asset('storage/ProductImage/'.$image)}}"  alt="" class="img-fluid"></div>
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
              <div class="card p-3">
                     <h6 class="title">Brand name: <span class="brand-name">{{$product->brand_id}}</span></h6>
                     <h6>Title : {{$product->title}}</h6>
                       <h4>Spiceal Price:</h4>

                    @php
                    if( $product->rattings_count> 0){
                      $avgRatting = $product->rattings_sum_rating/$product->rattings_count;
                    } else {
                     
                      $avgRatting= 0;
                    }
                    $avgRattingPer = ($avgRatting*100)/5
                  @endphp
                  <div class="d-flex">
                   <h1 class="h3 pe-3">{{$avgRatting}}</h1>
                    <div class="star-rating mt-2" title="">
                     
                      <div class="back-stars">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          
                          <div class="front-stars" style="width: {{$avgRattingPer}}%">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>  
                 <div class="pt-2 ps-2">({{$product->rattings_count}} Review)</div></div> 
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





          <div class="col-md-12 mt-5">
            <div class="bg-light">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="false">Shipping & Returns</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        {!!$product->description!!}
                       
                    </div>
                    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                   {!!$product->shipping_returns!!}
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                       @endif
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                     
                      <div class="col-md-8">
                          <form action="{{ route('frontend.contant.rattingStore',$product->id) }}" method="POST">
                            @csrf
                          <div class="row">
                              <h3 class="h4 pb-3">Write a Review</h3>
                              <div class="form-group col-md-6 mb-3">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                  @error('name')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                  <label for="email">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                  @error('email')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror
                              </div>
                              <div class="form-group mb-3">
                                  <label for="rating">Rating</label>
                                  <br>
                                  <div class="rating" style="width: 10rem">
                                      <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                                      <input id="rating-4" type="radio" name="rating" value="4"  /><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                                      <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                                      <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                                      <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                                      @error('rating')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror
                                  </div>
                              </div>
                              <div class="form-group mb-3">
                                  <label for="">How was your overall experience?</label>
                                  <textarea name="comment"  id="review" class="form-control" cols="30" rows="10" placeholder="How was your overall experience?"></textarea>
                                  @error('comment')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror
                              </div>
                              <div>
                                  <button class="btn btn-dark">Submit</button>
                              </div>
                            
                              
                          </div>
                        </form>
                      </div>
                      


                          @php
                          if( $product->rattings_count> 0){
                            $avgRatting = $product->rattings_sum_rating/$product->rattings_count;
                          } else {
                           
                            $avgRatting= 0;
                          }
                          $avgRattingPer = ($avgRatting*100)/5
                        @endphp
                          <div class="col-md-12 mt-5">
                            <div class="overall-rating mb-3">
                                <div class="d-flex">
                                    <h1 class="h3 pe-3">{{$avgRatting}}</h1>
                                    <div class="star-rating mt-2" title="">
                                        <div class="back-stars">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            
                                            <div class="front-stars" style="width: {{ $avgRattingPer}}%">
                                           
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="pt-2 ps-2">({{$product->rattings_count}} Reviews)</div>
                                </div>
                                
                            </div>




                          @foreach (  $product->rattings as $ratting )
                          @php
                              $ratingPar = ($ratting->rating*100)/5;
                          @endphp
                          <div class="rating-group mb-4">
                            <span> <strong> {{ $ratting->name }} </strong></span>
                             <div class="star-rating mt-2" title="">
                                 <div class="back-stars">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     
                                     <div class="front-stars" style="width: {{ $ratingPar}}%">
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                     </div>
                                 </div>
                             </div>   
                             <div class="my-3">
                                 <p> {{ $ratting->comment }} </p>
                             </div>
                         </div>
                          @endforeach
                          

                          
                      </div>
                  </div>

                </div>
            </div>
        </div>













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