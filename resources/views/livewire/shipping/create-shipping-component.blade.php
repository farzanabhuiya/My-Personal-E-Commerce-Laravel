<div>
    @if (session('success'))
    <div  class="alert alert-success w-10 h-20">
        <h4>{{session('success')}}</h4>
    </div>
      @endif
    <div>
        <section class="content-header">					
            <div class="container-fluid ">
                <div class="row ">
                   <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create Shipping</h1>
                    </div>
                    <div class="">
                        <a href="{{route('Shipping.store')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="addShipping" method="post">
                    @csrf
                    
                
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">
                       
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <select wire:model='district_id' id="district_id" class="form-control">
                                        <option value="">Select a Districte</option>
                                         @forelse ($districtes as $districte)
                                               {{-- <option {{(!empty($CustomerAddersse) && $CustomerAddersse->countrie_id == $countrie->id)? 'seleted' : ""}} value="{{$countrie->id}}">{{$countrie->name}}</option> --}}
                                     <option value="{{$districte->id}}">{{$districte->district_name}}</option>
                                         @empty
                                             
                                         @endforelse 
                                         <option value="rest">Rest of the world</option>
                                 
                                    </select>
                                    @error('district_id')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="slug">Amount</label>
                                    <input wire:model='amount' type="text"  id="amount"  class="form-control" placeholder="amount">	
                                </div>
                                @error('amount')
                                <span class="text-danger">{{$message }}</span>
                               @enderror
                            </div>	
                       
    
                            
                        </div>
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </section>

    
    
    
    </div>
    
</div>
