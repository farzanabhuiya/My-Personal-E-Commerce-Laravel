<div>
    <div>
        <section class="content-header">					
            <div class="container-fluid ">
                <div class="row ">
                   <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create Categories</h1>
                    </div>
                    <div class="">
                        <a href="{{route('category.store')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="addCategory" method="post"  enctype="multipart/form-data" >
                    @csrf
                    
                
                <div class="card">
                    
                    <div class="card-body">
                     									
                        <div class="row">
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
                                    <input type="text" id="slug"  class="form-control" placeholder="Slug">	
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
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                        
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


{{-- sweetalert  --}}


  @push('customJs')

<script>



$(document).ready(function(){


showToast('Data stored successfully!')

})




</script>
    

    


  @endpush
