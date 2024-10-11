<div>


    @if (session('success'))
    <div  class="alert alert-success w-10 h-20">
        <h4>{{session('success')}}</h4>
    </div>
      @endif

<!-- Main Content -->
<div id="content">



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- main contant here -->

     <div class="row">
        <div class="col-md-8">
          
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                        <h3>Change Password</h3>
                        <div></div>
                    </div>
                    <div class="card-body">
                        <form method="post"  wire:submit="PasswordUpdate">
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input  wire:model="old" type="password" class="form-control" id="oldPassword" placeholder="Enter your old password">
                                @error('old')
                                 <span class="text-danger">{{$message }}</span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input wire:model="password" type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
                                
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm New Password</label>
                                <input wire:model="confirmPassword" type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
                                @error('confirmPassword')
                                <span class="text-danger">{{$message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
         
        </div>
       
        
     </div>

     

        
      

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
