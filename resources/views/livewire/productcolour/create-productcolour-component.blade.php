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
                        <h1>Create ProductColoure</h1>
                    </div>
                    <div class="">
                        <a href="{{route('ProductColour.store')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="productcolour" method="post"  >
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">




                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="colour">Colour</label>
                                    <input type="text" wire:model='colour' id="colour" class="form-control" placeholder="colour">	
                                    @error('colour')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>
                         
    
                            
                        </div>
                    </div>							
                </div>
                <div wire:loading>
                    <h4> Saving ProductColour...</h4> 
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
