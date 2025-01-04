<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    

    function dashboard(){
        return view('admin.contant.dashbord');

        // return 'hello';
    }


    function allUser(){


        return view('admin.alluser.alluser');

    }


    // ===================ASSEN Roll IN USER=================================//

    function assenRoll($id){

        return view('admin.alluser.assenRoll',compact('id'));
    }

    // ==================== ALL OORDER===================//

    function allOrder(){

        return view('');

    }


    // =========================ADD ROLL =======================//
    

    public function addRoll(){
        return view("admin.addRoll.addRoll");
          
    }


}
