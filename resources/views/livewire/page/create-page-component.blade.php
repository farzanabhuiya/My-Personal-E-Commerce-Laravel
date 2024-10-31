<div>
  
   		<!-- Content Header (Page header) -->
           <section class="content-header">					
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Page</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form wire:submit="addPage" method="post"  enctype="multipart/form-data" >
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
                                    <label for="email">Slug</label>
                                    <input type="text"  wire:model='slug' id="slug" class="form-control" placeholder="Slug">	
                                </div>
                            </div>	
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="content">Content</label>
                                    <textarea  wire:model='content' id="editor"  placeholder="Content Goes Here...."></textarea>
                                </div>								
                            </div>                                    
                        </div>
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary">Create</button>
                    <a href="pages.html" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>




@push('customJs')

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    $(document).ready(function(){  
    showToast('Data stored successfully!')
    
    })   
    </script>

 @endpush
