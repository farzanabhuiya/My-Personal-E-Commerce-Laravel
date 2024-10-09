<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


      {{-- <meta name="csrf-token" frontend="{{csrf_token()}}"> --}}
	 <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- owl carousel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- owl carousel theme.css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />


    {{-- slick-carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('frontend/asset/style.css')}}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

 <style>
    nav{
      background-color: #081621;
    }

   
    
   </style>

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">


    <nav class="fixed-top  navba p-3 shadow  ">


        <div class="container-fluid  ">

            <div class="row ">




                <span class="col-1"> <i class="fa-solid fa-bars toogle-icon d-lg-none  d-sm-block "></i></span>



                <span class="col-3   col-md-3  logo    ">
                    <img class="ml-2" src="{{asset('frontend/asset/image/07957cd0-f64e-4d8c-a15b-0731377b3e44.jpg')}}" alt="Company Logo" height="40">
                </span>



                <!-- <span  class="col-2 col-md-4 d-lg-none d-block  "> -->
                <!-- <i id="search-iconn" class="fa-solid fa-magnifying-glass"></i> -->


                <div class="col-2 col-md-4 d-lg-none d-block  input-group-append  ">
                    <span id="search-iconn" class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm "></i>
                    </span>
                </div>

                <!-- </span> -->




                <div id="navsearch" class="col-4    col-md-4  d-lg-block d-none search navsearch">




                    <form class="">
                        <a class="input-group z-0">
                            <input type="text" class="form-control bg-light border-1 small" placeholder="Search for...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </a>
                    </form>

                </div>

                <div class="col-6  col-md-4 account  text-center">



                    <!-- Right Section: Cart, Search, Night Mode -->
                    <div id="account" class="d-flex gap-2 align-items-center justify-content-center ">

                        @auth()
                         <div class="login">   <a href="#" class="text-white">{{auth()->user()->name}}</a>
                         </div>
                           
                        @endauth

                        @guest
                          <div class="login">    <a href="{{route('login')}} " class="text-white">Login</a>
                         </div>
                           
                        @endguest

                        

                        <div class="nav-item position-relative">
                            <a href="{{route('frontend.contant.Cart')}}" class="text-light me-2 nav-link">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span id="cartCount" class="badge bg-danger">{{$cartCount}}</span>
                            </a>
                        </div>




                            @auth()
                                
                          
                        <div class="profile  ">

                            <div class="profile-dropdown ">
                                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-none ">auth </div>

                                    <img class="rounded-circle" src="{{asset('frontend/asset/image/cloth-2.jpg ')}}" alt="clouth" width="35px" height="35px">




                                </a>


                                <ul class="dropdown-menu border shadow-lg" aria-labelledby="dropdownMenuButton1">


                                @role(['supper_admin','writter','admin'])

                                  <li><a class="dropdown-item" href="{{route('dashbord.admin')}}">

                                            <div class="d-flex align-items-center   ">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="m-1">Dashboard</span>
                                                
                                            </div>
                                            


                                        </a></li>


                                @endrole

                                @role('user')

                                  <li><a class="dropdown-item" href="{{route('userdashboard.user')}}">

                                            <div class="d-flex align-items-center   ">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="m-1">Profile</span>
                                                
                                            </div>
                                            


                                        </a></li>


                                @endrole

                               



                                  



                                    <li><a class="dropdown-item" href="#">

                                            <i class="fas fa-cogs fa-sm fa-fw mr-5 text-gray-400"></i>
                                            Settings


                                        </a></li>
                                    <li><a class="dropdown-item" href="#">

                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Activity Log



                                        </a></li>
                                    
                                    <li class="logout"><a class="dropdown-item" href="#">

                                            <i class="fas fa-sign-out-alt fa-sm fa-fw  text-gray-400"></i>
                                            Logout



                                        </a></li>


                                         <form method="POST" action="{{route('logout')}}" x-data>
                                                            @csrf

                                                            
                                                        </form>
                                    




                                </ul>
                            </div>

                        </div>
                           @endauth



                        @guest
                            <div class="profile  ">

                            <div class="profile-dropdown ">
                                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-none ">auth </div>

                                    <img class="rounded-circle" src="{{asset('frontend/asset/image/cloth-2.jpg ')}}" alt="clouth" width="35px" height="35px">




                                </a>


                                <ul class="dropdown-menu border shadow-lg" aria-labelledby="dropdownMenuButton1">

                                
                                    
                                    <a class="dropdown-item" href="#">

                                            <i class="fas fa-cogs fa-sm fa-fw mr-5 text-gray-400"></i>
                                            Settings


                                        </a></li>
                                    <li><a class="dropdown-item" href="#">

                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Activity Log



                                        </a></li>
                                    <li><a class="dropdown-item" href="{{route('login')}}">

                                            <div class="d-flex align-items-center   ">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw  text-gray-400"></i>

                                                <span class="m-1">login</span>


                                            </div>



                                        </a></li>

                                </ul>
                            </div>

                        </div>
                        @endguest



                        

                        <div class="form-check form-switch">
                            <input class="form-check-input " type="checkbox" id="mode-toggle">
                        </div>





                    </div>

                </div>


            </div>




        </div>







        </div>

        </div>


        <!-- change manu -->






    </nav>



    <div class=" bg-secondary position2  shadow">

        <div class="container m-auto">

            <div class=" d-flex  dropdown1">
                <!-- Button trigger modal -->

              

            
                <div class="dropdown">
                    @foreach ( $categorie as $category )
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{$category->name}} 
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($category->Subcategorie as $Subcategorie)
                        <li><a class="dropdown-item" href="{{route('frontend.contant.ProductSubcategory', [$Subcategorie->slug])}}">{{$Subcategorie->name}}</a></li>
                        
                        @endforeach 
                    </ul>
                    @endforeach 
                </div>
             

            
            </div>

        </div>

    </div>







    @yield('content')



    <footer class="bg-dark text-white pt-4">
        <div class="container-fluid m-auto">
            <div class="row m-auto">
                <div class=" col-sm-6 col-md-4 col-lg-2">
                    <p>About</p>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Corporete Informatoin</a></li>
                    </ul>
                </div>
                <div class=" col-sm-6  col-md-4 col-lg-2">
                    <h5>Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">payments</a></li>
                        <li><a href="#" class="text-white">Shipping</a></li>
                        <li><a href="#" class="text-white">cancellation & Returns</a></li>
                        <li><a href="#" class="text-white">FAQ</a></li>
                        <li><a href="#" class="text-white">Report Infringement</a></li>
                    </ul>
                </div>
                <div class=" col-sm-6  col-md-4 col-lg-2">
                    <h5>Consumer policy</h5>
                    <ul class="list-unstyled">
                        <li class=""><a href="#" class="text-white ">cancellation & Returns</a></li>
                        <li><a href="#" class="text-white">Terms of use</a></li>
                        <li><a href="#" class="text-white">Security</a></li>
                        <li><a href="#" class="text-white">Privacy</a></li>
                        <li><a href="#" class="text-white">Sitemap</a></li>
                    </ul>
                </div>
                <div class=" col-sm-6  col-md-4 col-lg-2">
                    <h5>Mail Use</h5>
                    <div>
                        <p>
                            Flipkart Internet Private Limited,Buildings Alyssa, Begonia & Clove Embassy Tech Village,Outer Ring Road, Devarabeesanahalli Village,Bengaluru, 560103,Karnataka, India
                        </p>
                        <hr class="dropdown-divider">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 social-icons">
                    <h5>Social</h5>
                    <ul class="list-unstyled d-flex">
                        <li><a href="#" class="text-white m-2"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" class="text-white m-2"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#" class="text-white m-2"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class=" col-sm-6  col-md-4 col-lg-2">
                    <h5>Registered Office Address</h5>
                    <p>
                        Flipkart Internet Private Limited,

                        Buildings Alyssa, Begonia & Clove Embassy Tech Village,

                        Outer Ring Road, Devarabeesanahalli Village,

                        Bengaluru, 560103,

                        Karnataka, India

                        CIN : U51109KA2012PTC066107

                        Telephone: 044-45614700 / 044-67415800
                    </p>
                </div>
            </div>
            <div class="text-center py-3">
                <p>&copy; 2024 Your Company. All rights reserved.</p>
            </div>
        </div>
    </footer>



    <!-- fontawsom -->
    <script src="https://kit.fontawesome.com/1159b8e81c.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
                      {{-- slick-carousel --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- owl carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

    
    @stack('frontendJs')


    <script>
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
  </script>

    <script>
        $(document).ready(function(){
            $('.main-carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.carousel-nav'
            });
            $('.carousel-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.main-carousel',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                vertical: true,
                verticalSwiping: true,
                infinite: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true
                , autoplay: true
                , autoplayTimeout: 50
                , autoplayHoverPause: true
                , items: 1
                , dots: false,

            });



            $(".js-range-slider").ionRangeSlider({
                type: "double"
                , min: 0
                , max: 1000
                , from: 100
                , to: 1000
                , grid: true
            });

        })

    </script>

    <script>
        document.getElementById('mode-toggle').addEventListener('change', function() {
            document.body.classList.toggle('night-mode');
            document.querySelector('.navbar').classList.toggle('night-mode');
        });

    </script>


    <script>
        $(document).ready(function() {





            $('.toogle-icon ').click(function(event) {
                event.stopPropagation()
                $('.dropdown1').toggleClass('left-slider ')







            })



            $(document).on('click', function() {


                if ($('.dropdown1').hasClass('left-slider')) {


                    $('.dropdown1').removeClass('left-slider')



                } else if ($('.filter-slide').hasClass('filter-slid-toggle')) {
                    $('.filter-slide').removeClass('filter-slid-toggle')



                }




            })






            $('#filter-slide ').click(function(event) {
                event.stopPropagation()

                $('.filter-slide').toggleClass('filter-slid-toggle ')




            })



            $('#search-iconn ').click(function() {



                $('#navsearch').toggleClass('navsearch d-none ')






            })





{{-- form submit --}}


 $('.logout').click(function(){

       $(this).next('form').submit();

        console.log('hello')
       
    })


        })

    </script>




    @livewireScripts



    {{-- <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script> --}}
    
    <script>
        function AddCart(id) {
            $.ajax({
                url: "{{route('frontend.contant.AddToCart')}}",
                 type: 'POST',
                  data: {id:id,},
                dataType:'json',
                success:function(response){
                    // console.log(response) 
                  let cart =[];
                    cart = response;
                   
                   if(cart.status == true){
                     $('#cartCount').html(cart.cartCount);
                    alert(cart.message)
    
                   }else{
                    alert(cart.message)
                   }
    
                } 
            });
        }
    
    </script>


   

    
</body>
</html>
