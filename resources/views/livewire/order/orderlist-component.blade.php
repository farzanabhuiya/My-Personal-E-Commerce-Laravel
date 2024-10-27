<div>
    

    	<!-- Content Header (Page header) -->
        <section class="content-header">					
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" wire:model.live="search" class="form-control float-right" placeholder="Search">
            
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">								
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Orders #</th>											
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Date Purchased</th>
                                </tr>
                            </thead>
                            <tbody>
                                 

                                @foreach ( $orders as $order)
                                <tr>
                                    <td><a href="order-detail.html">{{$order->id}}</a></td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{$order->user->email}}</td>
                                    <td>
                                        <span class="badge bg-success">{{$order->status}}</span>
                                    </td>
                                    <td>${{$order->grand_total}}</td>
                                    <td>{{ $order->created_at->format('d-m-Y')}}</td>																				
                                </tr> 
                                @endforeach
                              
                            </tbody>								
                        </table>
                        {{ $orders->links() }}								
                    </div>
                   
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>
