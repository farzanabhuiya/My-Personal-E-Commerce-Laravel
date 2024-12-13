<div class="container">
    <div class="row">
      
        <div class="col-md-6">
            <form wire:submit="addShipping" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <select wire:model='district_id' id="district_id" class="form-control">
                                        <option value="">Select a District</option>
                                        @forelse ($districtes as $districte)
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Amount</label>
                                    <input wire:model='amount' type="text" id="amount" class="form-control" placeholder="amount">	
                                </div>
                                @error('amount')
                                <span class="text-danger">{{$message }}</span>
                                @enderror
                            </div>	
                        </div>
                    </div>							
                </div>
                <div wire:loading>
                    <h4>Saving Shipping...</h4> 
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        
        <div class="col-md-6 ">
            <div class="card">
            <div class="card-body">								
                @livewire('shipping.list-shipping-component')
                                                    
            </div>
            </div>
        </div>
    </div>

    
</div>
