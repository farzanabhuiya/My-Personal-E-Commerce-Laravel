<div>

   <!-- Main Content -->
   <div id="content">

   


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
            <a href="#" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Back</a>
        </div>

      <!-- user prifile -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
            
              <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <a href="{{route('frontend.editUserProfile')}}" type="button" class="btn btn-primary">Edit</a>
                      <h3>User Profile</h3>
                      <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-4 text-center">
                              <img src="https://via.placeholder.com/150" class="rounded-circle img-fluid" alt="Profile Photo">
                          </div>
                          <div class="col-md-8">
                              <h4 class="card-title" id="userName">John Doe</h4>
                              <p class="card-text" id="userEmail">john.doe@example.com</p>
                          </div>
                      </div>
                  </div>
              </div>
          
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>