


<div>
    @if (session('success'))
    <div class="alert alert-success">
        <h4>{{session('success')}}</h4>
    </div>
      @endif
    <div>
        <section class="content-header">					
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit ProductSizes</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('ProductSize.store')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form wire:submit="UpdateSize({{$id}})" method="post"  enctype="multipart/form-data" >
                    @csrf
                    
                
                <div class="card">
                    <div class="card-body">
                                                          
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="colour">size</label>
                                    <input value="{{$size}}" type="text" wire:model='size' id="size" class="form-control" placeholder="Size">	
                                    @error('size')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>
                       
    
                            
                        </div>
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
    
    
    
    
    
    
    
    
    
    
    
    </div>


</div>

