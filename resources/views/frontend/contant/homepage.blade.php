@extends('frontend.frontend_layout.forntend_layout')

@section('content')

<main>

  <!-- owl curusol start -->
  <div class="container-fluid">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel hight">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">

          <img src="{{asset('frontend/asset/image/carousel-1.jpg')}}" class="d-block w-100 image-fluid" alt="...">
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <!-- owl curusol end -->

  <div class="container ">
    <!-- Bootstrap Container -->
    <div class="row ">

      <!-- First Column (col-4) -->

      <!-- Second Column (col-8) -->
      <div class=" col-md-12 custom-column  overflow-auto">

        <div class="row">

          <!-- <img class="filter" src="/svg/filter.svg" alt=""> -->

          <div class="">
            <span class="pt-4 fs-5">Clothing And Accessories</span> <span>(Showing 1 40 products of 50,123
              products)</span>
          </div>

          <!-- all product -->

          <div class="row">
            @foreach ($products as $product )

            <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

              <div class="card shadow mt-3">
                <div class="image-container">

                  @php
                  $images = json_decode($product->image);

                  @endphp

                  @if ( !empty($images))
                  <a href="{{route('frontend.contant.singlePage', $product->slug)}}"> <img
                      style="width: 260px;height:300px object-fit:cover;obect-position:center;"
                      src="{{asset('storage/ProductImage/'.$images[0])}}" class="card-img-top"></a>
                  @else

                  <a href="{{route('frontend.contant.singlePage', $product->slug)}}"> <img
                      style="width: 260px;height:300px object-fit:cover;obect-position:center;" src=""
                      class="card-img-top"></a>

                  @endif

                  <div class="text-overlay">
                    <a onclick="WishlistAdd({{$product->id}})" class="whishlist" href="javascript:void(0)"> <i
                        class="fa-regular fa-heart"></i></a>
                  </div>

                </div>
                <div class="card-body">
                  <p class="card-text">Brand Name: <span class="brand-name">{{$product->brand->name}}</span></p>
                  <h5 class="card-title">Product Name:
                    {{$product->title}}</h5>
                  <h6>Price: <span class="price">${{$product->price}}
                    </span><span><del>${{$product->compare_price}}</del></span></h6>

                  <!-- ratting system start -->

                  @php
                  if( $product->rattings_count> 0){
                  $avgRatting = $product->rattings_sum_rating/$product->rattings_count;
                  } else {

                  $avgRatting= 0;
                  }
                  $avgRattingPer = ($avgRatting*100)/5
                  @endphp
                  <div class="d-flex">
                    <div class="star-rating mt-2" title="">
                      <h4 class="h5 pe-2">{{$avgRatting}}</h4>
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
                    <div class="pt-1 ps-1">({{$product->rattings_count}} Review)</div>
                  </div>

                  <!-- ratting system end -->

                  <div class="shopping d-flex flex-column gap-1  ">
                    <a href="javascript: void(0)" onclick="AddCart({{$product->id}})" id="cart" type="button"
                      class=" btn"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                    <a id="buy-now" type="button" class="btn"> <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                  </div>

                </div>
              </div>

            </div>
            @endforeach

          </div>

          <!-- allproduct end -->

          <!-- future product start -->

          <h4 class="mt-2">Latest Product</h1>
            <div class="row">

              @foreach ($latestproducts as $latestproduct)

              <div class="col-12 d-flex col-sm-6 col-md-4 col-lg-4 col-xl-3">

                <div class="card shadow mt-3">
                  <div class="image-container">
                    @php
                    $images = json_decode($latestproduct->image);

                    @endphp

                    <a href="{{route('frontend.contant.singlePage',$latestproduct->slug)}}"> <img
                        style="width: 260px;height:300px object-fit:cover;obect-position:center;"
                        src="{{  !empty($images[0]) ?  asset('storage/ProductImage/'.$images[0]) : ""  }}"
                        class="card-img-top"> </a>

                    <div class="text-overlay">
                      <a onclick="WishlistAdd({{$latestproduct->id}})" class="whishlist" href="javascript:void(0)"> <i
                          class="fa-regular fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Brand Name: <span class="brand-name">{{$latestproduct->brand->name}}</span></p>
                    <h5 class="card-title">{{$latestproduct->title}}</>
                      <h6>Price: <span
                          class="price">${{$latestproduct->price}}</span><span><del>${{$latestproduct->compare_price}}</del></span>
                      </h6>

                      <!-- ratting system start -->

                      @php
                      if( $latestproduct->rattings_count> 0){
                      $avgRatting = $latestproduct->rattings_sum_rating/$latestproduct->rattings_count;
                      } else {

                      $avgRatting= 0;
                      }
                      $avgRattingPer = ($avgRatting*100)/5
                      @endphp

                      <div class="d-flex">
                        <div class="star-rating mt-2" title="">
                          <h4 class="h5 pe-2">{{$avgRatting}}</h4>
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
                        <div class="pt-2 ps-2">({{$latestproduct->rattings_count}} Review)</div>
                      </div>

                      <!-- ratting system end -->

                      <div class="shopping d-flex flex-column gap-1  ">
                        <a id="cart" href="javascript: void(0)" onclick="AddCart({{$latestproduct->id}})" type="button"
                          class="btn "><i class="fa-solid fa-cart-shopping"></i>Add to Cart</a>
                        <a id="buy-now" type="button" class="btn"> <i class="fa-solid fa-bag-shopping"></i>Buy Now</a>

                      </div>

                  </div>
                </div>

              </div>
              @endforeach

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

      <div class="row row-cols-1  row-cols-sm-3 row-cols-md-3 row-cols-lg-5 g-3">

        @foreach ($brands as $brand)
        <a href="{{route('frontend.contant.BranddAll', [$brand->slug])}}">
          <div class="col">
            <div class="d-flex align-items-center border p-2 rounded">
              <img src="{{asset('storage/BrandImage/'.$brand->image)}}" alt="Brand Logo" class="img-fluid rounded me-2"
                style="width: 80px; height: auto;">

              <p class="card-text">Brand: {{$brand->name}}</p>
            </div>
          </div>
        </a>
        @endforeach

      </div>

    </div>
  </div>




  <div class="container-fluid mt-2 z-0">
    <h1> What Do You want to bay</h1>
    <div class="row row-cols-1 row-cols-sm-3 row-cols-md-5 row-cols-lg-5 g-3">
  
      @foreach ($items as $item)
      @php
        $images = json_decode($item->image);
      @endphp
  
      <div class="col">
        <a href="{{route('frontend.contant.ItemdAll', [$item->slug])}}" class="text-decoration-none">
          <div class=" border p-2 rounded d-flex flex-row align-items-center">
  
            <!-- Left: Image -->
            @if (!empty($images))
              <img class="img-fluid rounded me-3" style="width: 80px; height: auto;"
                src="{{asset('storage/ItemImage/'.$images[0])}}" alt="{{$item->name}}">
            @else
              <img class="img-fluid rounded me-3" style="width: 80px; height: auto;"
                src="" alt="No Image">
            @endif
  
            <!-- Right: Text -->
            <p class="card-text mb-0 text-center ">Brand: {{$item->name}}</p>
            
          </div>
        </a>
      </div>
      @endforeach
  
    </div>
  </div>
  
  

  

  <!-- All brand cards end -->








</main>

@push('frontendJs')

<script>
  function WishlistAdd(productId) {
    $.ajax({
      url: "{{route('front.contant.WishlistAdd')}}",
      type: 'POST',
      data: {
        product_id: productId,
      },
      dataType: 'json',
      success: function(response) {
        if (response.status == true) {
          alert(response.message);
        } else {
          alert(response.message);
        }
      }
    });
  }
</script>

@endpush

@endsection