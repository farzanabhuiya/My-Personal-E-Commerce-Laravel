<div>


    <section class="content-header">
        <div class="container-fluid ">
            <div class="row ">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Cupon Code</h1>
                    </div>
                    <div class="">
                        <a href="{{ route('Discount.index') }}" class="btn btn-primary">New Coupons</a>
                    </div>
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
                <form action="" method="get">
                    <div class="card-header">
                        <div class="card-title">
                            <button type="button" onclick="window.location.href="
                                class="btn btn-primary bt-sm">Reset</button>
                        </div>

                        <div class="card-tools">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" wire:model.live="search"class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Discount Amount</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th width="100">Status</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $key =>$coupon)
                            <tr  id="category-row-{{$coupon->id}}">
                                    <td>{{ $coupons->firstItem() + $key }}</td>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->name }}</td>
                                    <td>
                                        @if ($coupon->type == 'percent')
                                            {{ $coupon->discount_amount }}%
                                        @else
                                            ${{ $coupon->discount_amount }}
                                        @endif
                                    </td>

                                    <td>
                                        {{ $coupon->starts_at ? \Carbon\Carbon::parse($coupon->starts_at)->format('y-m-d H.i.s') : '' }}

                                    </td>
                                    <td>
                                        {{ $coupon->expires_at ? \Carbon\Carbon::parse($coupon->expires_at)->format('y-m-d H.i.s') : '' }}
                                    </td>

                                    <td>
                                        @if ($coupon->status == 1)
                                            <svg wire:click='toggleStatus({{ $coupon->id }})'
                                                class="text-success-50 text-success" xmlns="http://www.w3.org/100/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>>
                                        @else
                                            <svg wire:click='toggleStatus({{ $coupon->id }})' class="text-danger "
                                                xmlns="http://www.w3.org/100/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                            </svg>
                                        </a>
                                        <a href="#" data-id="{{ $coupon->id }}"
                                            class="text-danger w-4 h-4 mr-1 delete_coupone">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                {{ $coupons->links() }}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->








    @push('customJs')
    <script>
    
 
        $(".delete_coupone").on('click', function() {
        
           
        
        let cuponeId = $(this).data('id');
        
        var deleteUrl = "{{ route('Discount.delete', ':id') }}".replace(':id', cuponeId);
        deleteajax(cuponeId, deleteUrl)
     
    
    
    })
        
    
        {{-- sweet alert --}}
        showToast('Status updated successfully!')
    
    
    
            </script>
    @endpush




</div>
