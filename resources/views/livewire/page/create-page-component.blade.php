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
                                    <label for="status">Status</label>
                                    <select wire:model='status' id='status' class="form-control">
                                        <option  value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                   
                                </div>
                                
                            </div>	
                            <div class="col-md-12">
                                <div class="mb-3" wire:ignore>
                                    <labe  for="content">Content</labe>
                                    <textarea  wire:model='content'  id="content" placeholder="Content Goes Here...."></textarea>
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
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#content'))


            .then(function(leditor) {

                editor = leditor;

                leditor.model.document.on('change:data', () => { 
                    @this.set('content', leditor.getData())
                });

            })

            .catch(error => {
                console.error(error);
            });
    });
</script>



<script>
    $(document).ready(function(){  
    showToast('Data stored successfully!')
    
    })   
    </script>

 @endpush
