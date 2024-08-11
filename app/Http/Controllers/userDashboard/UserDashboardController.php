<?php

namespace App\Http\Controllers\userDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    // USER  DASHBOARD

    function userDashboard(){

        return view('user_dashbord.contant.user_dashboard');
    }
}
