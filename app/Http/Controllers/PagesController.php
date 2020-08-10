<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Homeを表示
    public function getHome(){
        return view('welcome');
    }
    
    //Aboutを表示
    public function getAbout(){
        return view('about');
    }
    
    //プライバシーポリシーを表示
    public function getPrivacyPolicy(){
        return view('privacy_policy');
    }
    
    //注意事項を表示
    public function getPrecaution(){
        return view('precaution');
    }
    
   
}
