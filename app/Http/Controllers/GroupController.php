<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
     //グループ座談会
    public function index(){
        return view('group_sessions.index');
    }
    
    public function form1(){
        return view('group_sessions.form1');
    }
}
