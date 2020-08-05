<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficialRequest;
use Auth;//追加
use App\User; //追加

class OfficialRequestController extends Controller
{
    //公式メンターリストを表示
    public function official_mentors()
    {
        return view('official_mentors.index');
    }
    
    //支払い画面
    public function payment()
    {
        $user = Auth::user();
        
        return view('official_mentors.payment', ['user'=>$user]);
    }
    
    public function request_form()
    {
        $user = Auth::user();
        
        return view('official_mentors.request_form', ['user' => $user]);
    }
    
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'plan' => ['required', 'string'],
            'mentor_pref'=> ['required', 'string'],
            'goal'=> ['required', 'string'],
            'questions'=> ['required', 'string'],
            'dates'=> ['required', 'string'],
            'precaution'=> ['required', 'numeric'],
        ]);
        
        $user = Auth::user();
        
        $official_request = new OfficialRequest($request->all());
        
        return view('official_mentors.confirm', [
            'user'=>$user,
            'official_request'=>$official_request]);
    }
    
    public function complete(Request $request)
    {
        $user = Auth::user();
        
        // データを保存
        $official_request = new OfficialRequest();
        $official_request->user_id = $user->id;
        $official_request->name = $request->name;
        $official_request->email = $request->email;
        $official_request->plan = $request->plan;
        $official_request->mentor_pref = $request->mentor_pref;
        $official_request->goal = $request->goal;
        $official_request->questions = $request->questions;
        $official_request->dates = $request->dates;
        $official_request->precaution = $request->precaution;
        $official_request->save();
 
        // 二重送信防止
        $request->session()->regenerateToken();
        
        return view('official_mentors.complete', [
            'user' => $user
            ]);
    }
}
