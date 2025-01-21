@extends('frontend.frontend_layout.forntend_layout')
@section('content')


    <!-- Navbar -->
    <section class="section-5 pt-3 pb-3 mb-3 bg-white">
        <div class="container">
            <div class="light-font">
                <ol class="breadcrumb primary-color mb-0">
                    <li class="breadcrumb-item"><a class="blank-text" href="{{route('frontend.contant.homepage')}}">Home</a></li>
                    <li class="breadcrumb-item">about us</li>
                </ol>
            </div>
        </div>
    </section>

   
    @if ($page->slug == 'contact-us')
    <!-- Our Mission Section -->
     {{-- <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>{{$page->name}}</h2>
                   
                </div>
               
            </div>
        </div>
    </section> --}}

    
        <!-- Contact Section -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                         <div class="col-md-4 pt-2">
                            <h2>Contact Information</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    {!!$page->content!!}
                                </li>
                            </ul>
                        </div>
                    <!-- Contact Form -->
                    <div class="col-md-8">
                        <h2>Send Us a Message</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </section>

     



        @else

        <section class=" section-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>{{$page->name}}</h2>
                        <p class="lead">{!!$page->content!!}.</p>
                    </div>
                    <div class="col-md-6">
                        @foreach (json_decode($page->image) as $image)
                        <img src="{{asset('storage/PageImage/'.$image)}}" alt="Our Mission" class="img-fluid rounded">
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
        @endif






@endsection