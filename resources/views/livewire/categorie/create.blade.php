<div>
    <div>
        <section class="content-header">					
            <div class="container-fluid">
                <div class="row">
                   <div class="d-flex justify-content-between">
                        <div>
                            <h6>Create Categories</h6>
                        </div>
                        <div>
                            <a href="{{ route('category.store') }}" class="btn btn-primary">Back</a>
                        </div>
                   </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Form Section (5 Columns) -->
                    <div class="col-md-5">
                        <form wire:submit="addCategory" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" wire:model='name' id="name" class="form-select"  placeholder="Name">	
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror	
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="status">Status</label>
                                                <select wire:model.live='status' id='status' class="form-select" aria-label="Default select example">
                                                    <option value="1">Active</option>
                                                    <option value="0">Block</option>
                                                </select>
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="showhome">Show on Home</label>
                                                <select wire:model.live='showhome' id='showhome' class="form-select" aria-label="Default select example">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                                @error('showhome')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div wire:loading>
                                <h4>Saving Categorie...</h4> 
                            </div>
                            <div class="pb-5 pt-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                            </div>
                        </form>
                    </div>

                    <!-- Livewire Component Section (7 Columns) -->
                    <div class="col-md-7">
                        @livewire('categorie.show-all')
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
