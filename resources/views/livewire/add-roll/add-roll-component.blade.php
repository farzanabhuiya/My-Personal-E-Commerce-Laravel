<div>


    <div class="container mt-5">

        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 >Assign Role</h5>
                    </div>
                    <div class="card-body">
                        <form id="assignRoleForm" wire:submit="addRoll">
                            <div class="mb-3">
                                <label for="rollName" class="form-label">Roll Name</label>
                                <input type="text" wire:model='name' class="form-control" id="rollName"
                                    placeholder="Enter Roll name">
                                @error('name')
                                <span class="text-danger">{{$message }}</span><br>
                               @enderror

                            </div> 
                              
                            <button type="submit" class="btn btn-success">Assign Role</button>
                        </form>
                    </div>
                </div>


            </div>



            <div class="col-md-6">

                <h2 class="text-center">Role Management</h2>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>

                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="roleTable">
                        <tr>
                            <td>1</td>

                            <td>Admin</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Edit
                                </button>
                                <button class="btn btn-danger  delete-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>

                            <td>Editor</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Edit
                                </button>
                                <button class="btn btn-danger  delete-btn">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </div>


        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
  @push('customJs')

<script>



$(document).ready(function(){


showToast('Roll add  successfully!')

})




</script>
    

    


  @endpush