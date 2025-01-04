
<div>
    <div>
        <section class="content-header">					
            <div class="container-fluid">
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Create SubCategories</h6>
                        </div>
                        <div>
                            <a href="{{route('Subcategorie.story')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Form Section (4 Columns) -->
                    <div class="col-md-4">
                        <form wire:submit="addSubcategorie" method="POST">
                            @csrf
                            @method('post')
                            <div class="card">
                                <div class="card-body">                     									
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="categorie_id">{{Str::title('category')}}</label>
                                                <select wire:model='categorie_id' id="categorie_id" class="form-select" aria-label="Default select example">
                                                    @forelse ($categories as $categorie )
                                                    <option value="{{ $categorie->id }}" {{ $categorie->id == $this->categorie_id ? 'selected' : '' }}>
                                                        {{ Str::title($categorie->name) }}
                                                    </option>
                                                    @empty
                                                    <option disabled selected>No category found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" wire:model='name' id="name" class="form-control" placeholder="Name">	
                                                @error('name')
                                                <span class="text-danger">{{$message }}</span>
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
                                            </div>
                                            @error('status')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="showhome">Show on Home</label>
                                                <select wire:model='showhome' id='showhome' class="form-select" aria-label="Default select example">
                                                    <option selected value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            @error('showhome')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>							
                            </div>
                            <div wire:loading>
                                <h4>Saving SubCategorie....</h4> 
                            </div>
                            <div class="pb-5 pt-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                            </div>
                        </form>
                    </div>

                    <!-- Livewire Section (6 Columns) -->
                    <div class="col-md-8">
                        @livewire('Subcategorie.list-subcategory-component')
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


   
  
    

  @push('customJs')

<script>



$(document).ready(function(){


showToast('Data stored successfully!')

})




</script>
    

    


  @endpush

  
 


