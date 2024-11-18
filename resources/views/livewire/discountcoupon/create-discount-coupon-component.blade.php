<div>



        <section class="content-header">					
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Cupon Code</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form wire:submit="addDiscount" method="post"  enctype="multipart/form-data">
                    @csrf
                
                  
                
                <div class="card">
                    <div class="card-body">	
                        @if (session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif							
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">code</label>
                                    <input type="text" wire:model='code' id="code" class="form-control" placeholder="code">
                                    @error('code')
                                         <span class="text-danger">{{$message }}</span>
                                        @enderror	
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model='name' id="name" class="form-control" placeholder="Name">	
                                </div>
                            </div>
                         	

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Max Uses</label>
                                    <input type="number" wire:model='max_uses' id="max_uses" class="form-control" placeholder="Max Uses">	
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Max Uses_User</label>
                                    <input type="text" wire:model='max_uses_user' id="max_uses_user" class="form-control" placeholder="Max_uses_user">	
                                </div>
                            </div>

                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Type</label>
                                    <select wire:model='type' id='type' class="form-control">
                                        <option value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Discount_amount</label>
                                    <input type="number" min="0" wire:model='discount_amount' id="discount_amount" class="form-control" placeholder="discount_amount">
                                    @error('discount_amount')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Min Amount</label>
                                    <input type="number" min="0" wire:model='min_amount' id="min_amount" class="form-control" placeholder="min_amount">	
                                </div>
                            </div>
                            

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select  wire:model.live='status'  id='status' class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Starts_at</label>
                                    <input autocomplete="off" type="date" wire:model='starts_at'  id="starts_at" class="form-control" placeholder="Starts_at">
                                    @error('starts_at')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Expires_at</label>
                                    <input autocomplete="off" type="date" wire:model='expires_at' id="expires_at" class="form-control" placeholder="Expires_at">
                                    @error('expires_at')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>


                         

                            
                        </div>
                    </div>							
                </div>
                <div wire:loading>
                    <h4> Saving DiscountCoupon...</h4> 
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </section>



        
@push('customJs')


<script>
    $(document).ready(function(){
        $('#starts_at').datetimepicker({
            // options here
            format:'Y-m-d H.i.s',
        });
    });


    $(document).ready(function(){
        $('#expires_at').datetimepicker({
            // options here
            format:'Y-m-d H:i:s',
        });
    });
</script>

@endpush


        
    
   






</div>
