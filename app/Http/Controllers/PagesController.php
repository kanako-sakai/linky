<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function getPrivacyPolicy()
    {
        $file_path = storage_path('app/pdf/privacy.pdf');
        $headers=['Content-disposition' => 'inline; filename="privacy.pdf"'];
        return response()->file($file_path, $headers);
    }
    
    //注意事項を表示
    public function getPrecaution(){
        return view('precaution');
    }
    
    //特定商取引法を表示
    public function getTokushoho(){
        return view('tokushoho');
    }
   
}
