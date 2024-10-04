<div>
   
 <div class="row">


 

    @if (Session::has('success'))
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
  @endif
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3>Shopping Cart</h3>
                                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>  
                                                <th>Total</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartContents as $item)
                                        
                                           
                                            <!-- Example Product Row -->
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>${{$item->price}}</td>
                        

                                                <td>
                                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-dark btn-minus p-2 pt-1 pb-1 sub" data-id="{{$item->rowId}}">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" class="form-control form-control-sm  border-0 text-center" value="{{$item->qty}}">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-dark btn-plus p-2 pt-1 pb-1 add" data-id="{{$item->rowId}}">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $ {{ $item->price*$item->qty }}
                                                 </td>

                                                 <td>
                                                    <button id="deleteBtn" class="btn btn-sm btn-danger deleteBtn "><i class="fa fa-times"></i></button>  
                                                    <form action="{{route('frontend.contant.deleted',$item->rowId)}}"  method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>   
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
                    <!-- Cart Summary Section -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Cart Summary</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Total Items:</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal:</td>
                                            <td>${{Cart::subtotal()}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Delivery Charge:</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge:</td>
                                            <td>$10.00</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><strong>Total Cost:</strong></td>
                                            <td><strong>${{Cart::subtotal()}}</strong></td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                                <button type="button" class="btn btn-primary btn-block">Proceed to Checkout</button>
                            </div>
                        </div>
                    </div>

                 </div>

</div>

@push('frontendJs')
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    
    <script type="text/javascript">
   

$('.add').click(function(){
     var qtyElement = $(this).parent().prev(); // Qty Input
     var qtyValue = parseInt(qtyElement.val());
     if (qtyValue < 10) {
        
          qtyElement.val(qtyValue+1);
          var rowId = $(this).data('id');
          var newQty = qtyElement.val();
          UpdateCart(rowId,newQty)
      }            
  });

  $('.sub').click(function(){
     var qtyElement = $(this).parent().next(); 
     var qtyValue = parseInt(qtyElement.val());
     if (qtyValue > 1) {
         qtyElement.val(qtyValue-1);

         var rowId = $(this).data('id');
          var newQty = qtyElement.val();
         UpdateCart(rowId,newQty)
     }        
  });


  function UpdateCart(rowId,qty){
     $.ajax({
         url:"{{route('frontend.contant.UpdateCart')}}",
         type:'post',
         data:{rowId:rowId, qty:qty},
         dataType:'json',
         success:function(response) {

             if(response.status == true){
                 window.location.href= '{{route("frontend.contant.Cart")}}';
             }
             
         }

     });
  }

    </script>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

$('#deleteBtn').click(function (event){

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
   $(this).next('form').submit().prev()
  }
});

});

    </script>
    @endpush