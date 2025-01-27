<div>



    <div class="container ">



        <div class="row">




            <div class="col-lg-3 col-md-4">
                <a href="{{ route('dashboard.alluser') }}" class="text-decoration-none">
                    <div class="card text-center bg-info shadow-sm text-white" style="padding: 10px;">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h6 class="card-title mb-1">Total Users</h6>
                            <p class="card-text h4 mb-1">{{ $userCount }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="{{route('dashboard.alluser')}}" class="text-decoration-none">
                    <div class="card text-center bg-info shadow-sm text-white" style="padding: 10px;">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-users fa-2x"></i> 
                            </div>
                            <h6 class="card-title mb-1">Total Order</h6> 
                            <p class="card-text h4 mb-1">{{$OrderCount}}</p> 
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-3 col-md-4">
                <a  href="{{ route('dashboard.addroll') }}" class="text-decoration-none">
                    <div class="card text-center bg-info shadow-sm text-white " style="padding: 10px;">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h6 class="card-title mb-1">Add Roll</h6>
                            <p class="card-text h4 mb-1"></p>
                        </div>
                    </div>
                </a>
            </div>













        </div>

        <div class="row">
            <div class="col-md-7">
                
                <div id="container" style="width:100%; height:400px;"></div>


            </div>


            <div class="col-md-5">
                <div id="pie_chart" style="width:100%; height:400px;"></div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-7">
                
                <div id="culom_chart" style="width:100%; height:400px;"></div>


            </div>


            <div class="col-md-5">
                <div id="pie_chart" style="width:100%; height:400px;"></div>

            </div>
        </div>


        
    </div>














</div>
