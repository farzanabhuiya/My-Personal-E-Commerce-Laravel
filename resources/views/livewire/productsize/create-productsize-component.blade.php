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
                        <h1>Create ProductSizes</h1>
                    </div>
                    <div class="">
                        <a href="{{route('ProductSize.store')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="productsize" method="post"  >
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">




                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="size">Size</label>
                                    <input type="text" wire:model='size' id="size" class="form-control" placeholder="Sizes">	
                                    @error('size')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
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
                            </div> --}}
    
                            
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