
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
                        <h1>Edit ProductColour</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('ProductColour.store')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form wire:submit="UpdateColour({{$id}})" method="post"  enctype="multipart/form-data" >
                    @csrf
                    
                
                <div class="card">
                    <div class="card-body">
                                                          
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="colour">Colour</label>
                                    <input value="{{$colour}}" type="text" wire:model='colour' id="colour" class="form-control" placeholder="Colour">	
                                    @error('colour')
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

