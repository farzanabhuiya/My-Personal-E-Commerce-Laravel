<div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">					
            <div class="container-fluid my-4">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order: #{{$order->id}}</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="orders.html" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            @if (session()->has('message'))
            <div class="alert alert-success"><h4>{{ session('message') }}</h4></div>
        @endif
            <!-- Default box -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header pt-3">
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                    <h1 class="h4 mb-3">Shipping Address</h1>
                                    <address>
                                        <strong>{{$order->customerAddress->first_name.' '.$order->customerAddress->last_name}}</strong><br>
                                        {{$order->customerAddress->address}}, {{ $order->customerAddress->district->district_name }}<br>
                                        {{$order->customerAddress->city}}, {{$order->customerAddress->zip}}<br>
                                        Phone: {{$order->customerAddress->mobile}}<br>
                                        Email:{{$order->customerAddress->email}}
                                    </address>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #007612</b><br>
                                        <br>
                                        <b>Order ID:</b> {{$order->id}}<br>
                                        <b>Total:</b> ${{number_format($order->grand_total,2)}}<br>
                                        <b>Status:</b>
                                        <span class="badge 
                                        {{ $order->status == 'pending' ? 'bg-danger' : '' }}
                                        {{ $order->status == 'shipped' ? 'bg-info' : '' }}
                                        {{ $order->status == 'delivered' ? 'bg-success' : '' }}
                                        {{ $order->status == 'cancelled' ? 'bg-danger' : '' }}">
                                    {{-- {{ ucfirst($status) }} লাইনটি status মানটিকে একটি বাক্যের মতো করে প্রদর্শন করে।
                                     ucfirst ফাংশনটি এখানে ব্যবহার করা হচ্ছে,
                                      যা যেকোনো স্ট্রিংয়ের প্রথম অক্ষরটিকে বড় হাতের অক্ষরে রূপান্তর করে।
                                   উদাহরণস্বরূপ, যদি status মান pending হয়, তবে ucfirst একে Pending রূপে দেখাবে। --}}
                                        {{ ucfirst($status) }}
                                    </span>

                                       
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-3">								
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th width="100">Price</th>
                                            <th width="100">Qty</th>                                        
                                            <th width="100">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                               @foreach ($orderItems as $orderItem )
                                               <tr>
                                                <td>{{$orderItem ->name}}</td>
                                                <td>${{number_format($orderItem->price,2)}}</td>                                        
                                                <td>{{$orderItem ->qty}}</td>
                                                <td>${{number_format($orderItem->total,2)}}</td>
                                            </tr>
                                               @endforeach
                                        
                                        <tr>
                                            <th colspan="3" class="text-right">Subtotal:</th>
                                            <td>${{number_format($order->subtotal,2)}}</td>
                                        </tr>
                                        
                                        <tr>
                                            <th colspan="3" class="text-right">Shipping:</th>
                                            <td>${{number_format($order->shipping,2)}}</td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" class="text-right">Grand Total:</th>
                                            <td>${{number_format($order->grand_total,2)}}</td>
                                        </tr>
                                    </tbody>
                                </table>								
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <form wire:submit.prevent="updateOrder">
                                @csrf
                            <div class="card-body">
                                <h2 class="h4 mb-3">Order Status</h2>
                                <div class="mb-3">
                                    <select  wire:model="status" id="status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="delivered">Delivered</option>
                                        <option value="cancelled">Cancelled</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="">Shipped_Date</label>
                                    <input type="text" wire:model="shipped_date" id="shipped_date" class="form-control" placeholder="Shipped_Date">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="h5 mb-3">Send Inovice Email</h2>
                                <div class="mb-3">
                                    <select name="status" id="status" class="form-control">
                                        <option value="">Customer</option>                                                
                                        <option value="">Admin</option>
                                    </select>
                                </div>
                                <div wire:loading>
                                    <h4> Saving Order...</h4> 
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
</div>
@push('customJs')


<script>
    $(document).ready(function(){
        $('#shipped_date').datetimepicker({
            // options here
            format:'Y-m-d H.s',
        });
    });

</script>

@endpush