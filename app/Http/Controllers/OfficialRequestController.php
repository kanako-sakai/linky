<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficialRequest;
use Auth;//追加
use App\User; //追加
use App\Mail\OfficialRequestMail;

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
        return view('official_mentors.payment');
    }
    
    //1回プランの場合
    public function request_form_1()
    {
        $user = Auth::user();
        
        return view('official_mentors.request_form_1', ['user' => $user]);
    }
    
    //3回プランの場合
    public function request_form_3()
    {
        $user = Auth::user();
        
        return view('official_mentors.request_form_3', ['user' => $user]);
    }
    
    //5回プランの場合
    public function request_form_5()
    {
        $user = Auth::user();
        
        return view('official_mentors.request_form_5', ['user' => $user]);
    }
    
    public function payment_failed()
    {
        $user = Auth::user();
        
        return view('official_mentors.payment');
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
        
        //入力されたメールアドレスにメールを送信
        \Mail::send(new OfficialRequestMail([
            'to' => $request->email,
            'to_name' => $request->name,
            'from'=>'linky.register@gmail.com',
            'from_name' => 'Linky',
            'subject' => '公式メンター相談申込受付完了のお知らせ',
            'plan'=>$request->plan,
            'mentor_pref'=>$request->mentor_pref,
            'goal'=>$request->goal,
            'questions'=>$request->questions,
            'dates'=>$request->dates,
        ], 'to'));
        
        //自分に送るメール
        \Mail::send(new OfficialRequestMail([
            'to' => 'knksk.526@gmail.com',
            'to_name'=>'Kanako',
            'from' => $request->email,
            'from_name' => $request->name,
            'subject' => '公式メンター申し込み',
            'plan'=>$request->plan,
            'mentor_pref'=>$request->mentor_pref,
            'goal'=>$request->goal,
            'questions'=>$request->questions,
            'dates'=>$request->dates,
        ], 'from'));
    
        return view('official_mentors.complete', [
            'user' => $user
            ]);
    }
}
