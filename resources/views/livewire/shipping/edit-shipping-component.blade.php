<div class="container">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Shipping</h4>
                </div>
                <div class="card-body">
                    <form wire:submit="UpdateShipping({{ $id }})" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="district_id">Name</label>
                            <select wire:model="district_id" id="district_id" class="form-control">
                          
                                @forelse ($districtes as $districte)
                                    <option value="{{ $districte->id }}">{{ $districte->district_name }}</option>
                                @empty
                                    <option disabled>No Districts Available</option>
                                @endforelse
                                <option value="rest">Rest of the World</option>
                            </select>
                            @error('district_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="amount">Amount</label>
                            <input value="{{ $amount }}" wire:model="amount" type="text" id="amount" class="form-control"
                                placeholder="Enter amount">
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping List</h4>
                </div>
                <div class="card-body">
                    @livewire('shipping.list-shipping-component')
                </div>
            </div>
        </div>
    </div>
</div>
