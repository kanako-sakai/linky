<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
     //グループ座談会
    public function index(){
        return view('group_sessions.index');
    }
    
    public function payment(){
        return view('group_sessions.payment');
    }
    
    public function thankyou(){
        return view('group_sessions.thankyou');
    }
}
