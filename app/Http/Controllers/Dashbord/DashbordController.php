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



}
