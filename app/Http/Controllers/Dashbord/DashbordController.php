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


    // ===================assenRoll=================================//

    function assenRoll($id){

        return view('admin.alluser.assenRoll',compact('id'));
    }

    // ==================== ALL OORDER===================//

    function allOrder(){

        return view('');

    }


}
