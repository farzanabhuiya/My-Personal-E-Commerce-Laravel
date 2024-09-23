<div>
  

    <div>
        <section class="content-header">					
            <div class="container-fluid ">
                <div class="row ">
                   <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create SubCategories</h1>
                    </div>
                    <div class="">
                        <a href="{{route('Subcategorie.story')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="addSubcategorie" method="POST"  >
                    @csrf
                    @method('post')
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="categorie_id">Category</label>
                                    <select  wire:model='categorie_id'  id="categorie_id" class="form-control">
                                        @forelse ($categories as $categorie )
                                        
                                     
                                        <option value="{{ $categorie->id }}" {{ $categorie->id == $this->categorie_id ? 'selected' : '' }}>
                                            {{ $categorie->name }}</option>
                                        @empty
                                        <option disabled selected>No catrgory found</option>
                                      @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model='name' id="name" class="form-control" placeholder="Name">	
                                    @error('name')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input wire:model='slug' type="text" id="slug"  class="form-control" placeholder="Slug">	
                                    @error('slug')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>	
    
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select wire:model='status' id='status' class="form-control">
                                        <option  value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                   
                                </div>
                                @error('status')
                                <span class="text-danger">{{$message }}</span>
                               @enderror
                            </div>
    
    
    
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Show on Home</label>
                                    <select wire:model='showhome' id='showhome' class="form-control">
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


   
  
    

  @push('customJs')

<script>



$(document).ready(function(){


showToast('Data stored successfully!')

})




</script>
    

    


  @endpush

  
 


