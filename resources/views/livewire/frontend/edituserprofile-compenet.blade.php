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

         
         <!-- user prifile -->
         <div class="container-fluid">
           <div class="row">
             <div class="col-8">
               
                 <div class="card">
                     <div class="card-header d-flex justify-content-between align-items-center">
                         <a href="{{route('frontend.PasswordUpdate')}}" type="button" class="btn btn-primary">Password</a>
                         <h3>User Edit Profile</h3>
                         <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                     </div>
                     <div class="card-body d-block">

                       
                         <div class="row d-block">
                           <form method="post"  wire:submit="updateProfile" enctype="multipart/form-data">
                           
                            <input  wire:model="name" type="text" class="form-control my-2 "  placeholder="You user Name">
                                 @error('name')
                                 <span class="text-danger">{{$message }}</span>
                                 @enderror
       
                               <input wire:model="email"  type="text" class="form-control my-3"  placeholder="You Email">
                                    
                               @error('email')
                                 <span class="text-danger">{{$message }}</span>
                                 @enderror
                  
                                 
       
                               <label for="" class="my-2 d-block">
                                          Your profile image
                            <input wire:model="profile_img" type="file" class="form-control "  placeholder="">
                            </label>
       
                            @error('profile_img')
                                 <span class="text-danger d-block">{{$message }}</span>
                                 @enderror
       
                               <button class="btn btn-primary " type="submit">Update Profile</button>
                           </form>
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
