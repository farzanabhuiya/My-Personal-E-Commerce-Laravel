<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryOrderUserController extends Controller
{
    public function HistoryOrderUser(){
        
        return view('frontend.contant.HistoryOrderUser');
    }
}
