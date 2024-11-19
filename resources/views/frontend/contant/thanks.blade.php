<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




</head>

<body>
    <br><br>

    <div class="m-auto text-center">
        <div class="text-center">
            <h1 class="display-4 text-success">Thank You for Your Order!</h1>
            <p class="lead">We appreciate your purchase. Your order details are below:</p>
        </div>
        <h3>Order Id:{{ $orderId }}</h3>
    </div>



    <div class="container ">

        <div class="row mt-5 d-flex justify-content-center">


            <div class="col-md-7  ">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <h5>Order Details</h5>
                    </div>
                    <div class="card-body"> 
                        <div class="table-responsive">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach ($orderitem as $item)
                                        <tr>


                                            <td>



                                                <?php
                                                
                                                $imageString = $item->product->image;
                                                $imageArray = json_decode($imageString, true);
                                                // dd($imageArray[0]);
                                                ?>



                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img style="width: 60px;height:50px object-fit:cover;obect-position:center;"
                                                        src="{{ asset('storage/ProductImage/' . $imageArray[0]) }}">

                                                </div>
                                            </td>

                                            <td>{{ $item->product->title }}</td>
                                            <td>${{ $item->product->price }}</td>

                                            {{-- @endforeach --}}

                                            <td>
                                                $ {{ $item->qty }}
                                            </td>



                                        </tr>

                                        <!-- Add more product rows as needed -->
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Corder Summary Section -->
            <div class="col-md-5 ">
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <h5>Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                {{-- @foreach ($orderitem as $item) --}}


                                <tr>
                                    <td>Subtotal:</td>
                                    <td>${{ $order->subtotal }}</td>
                                </tr>

                                <tr>
                                    <td>Shipping Charge:</td>
                                    <td>${{ $order->shipping }}</td>
                                </tr>
                                <tr>
                                    <td>Discount:</td>
                                    <td>${{ $order->discount }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <hr>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><strong>Total Amount:</strong></td>
                                    <td><strong>${{ $order->grand_total }}</strong></td>
                                </tr>
                            </tbody>

                        </table>


                    </div>
                </div>


            </div>
            <div class="text-center ">
                <a href="/" class="btn btn-primary">Back to Home</a>
            </div>
        </div>









    </div>



















    </div>
























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
