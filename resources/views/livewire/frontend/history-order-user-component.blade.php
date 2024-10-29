<div>
    

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Card History</h3>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                </div>
                <div class="card-body">
                   @foreach ( $orderItems  as $orderItem)
                   <div class="card mb-3">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Order {{$orderItem->id}}</h5> --}}
                        <h5 class="card-title">Order #{{ $orderItem->order->id }}</h5>
                        <p class="card-text">Product: {{$orderItem->name}}</p>
                        <p class="card-text">Date:{{ $orderItem->created_at->format('d-m-Y') }}</p>
                        <p class="card-text">Price: $ {{$orderItem->price}}</p>
                        <p class="card-text">Status:  {{ $orderItem->order->status }}</p>
                    </div>
                </div>
                   @endforeach
                  

                </div>
            </div>
        </div>

     </div>

</div>
