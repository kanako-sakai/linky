<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficialRequest;
use Auth;//追加
use App\User; //追加
use App\Mail\OfficialRequestMail;
use App\OfficialRecord;
use App\Schedule;

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
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        return view('official_mentors.request_form_1', [
            'user' => $user,
            'mentors'=>$mentors
        ]);
    }
    
    //3回プランの場合
    public function request_form_3()
    {
        $user = Auth::user();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        return view('official_mentors.request_form_3', [
            'user' => $user,
            'mentors'=>$mentors
        ]);
    }
    
    //5回プランの場合
    public function request_form_5()
    {
        $user = Auth::user();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        return view('official_mentors.request_form_5', [
            'user' => $user,
            'mentors'=>$mentors
        ]);
    }
    
    //初回リクエストの際の確認
    public function confirm(Request $request)
    {
        
        //dd($request);
        
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'plan' => ['required', 'string'],
            'mentor_id'=> ['required'],
            'goal'=> ['required', 'min:10','max:500'],
            'questions'=> ['required', 'min:10', 'max:1000'],
            'dates'=> ['required', 'min:10', 'max:500'],
            'precaution'=> ['required'],
        ]);
        
        $user = Auth::user();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        $official_request = new OfficialRequest($request->all());
        
        return view('official_mentors.confirm', [
            'user'=>$user,
            'official_request'=>$official_request,
            'mentors'=>$mentors
        ]);
    }
    
    //追加リクエストの際の確認
    public function confirm_add_request(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'plan' => ['required', 'string'],
            'mentor_id'=> ['required'],
            'goal'=> ['required', 'min:10','max:500'],
            'questions'=> ['required', 'min:10', 'max:1000'],
            'dates'=> ['required', 'min:10', 'max:500'],
            'precaution'=> ['required', 'numeric'],
        ]);
        
        $user = Auth::user();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        $official_request = new OfficialRequest($request->all());
        
        return view('official_mentors.add_request_confirm', [
            'user'=>$user,
            'official_request'=>$official_request,
            'mentors'=>$mentors
        ]);
    }
    
    public function complete(Request $request)
    {
        $user = Auth::user();
        
        // データをofficial_requestに保存
        $official_request = new OfficialRequest();
        $official_request->user_id = $user->id;
        $official_request->name = $request->name;
        $official_request->email = $request->email;
        $official_request->plan = $request->plan;
        $official_request->mentor_id = $request->mentor_id;
        $official_request->goal = $request->goal;
        $official_request->questions = $request->questions;
        $official_request->dates = $request->dates;
        $official_request->precaution = $request->precaution;
        $official_request->save();
        
        //データをofficial_recordに保存
        if(OfficialRecord::where('from_user_id', $user->id)->exists()){
            $previous_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
            
            $official_record = new OfficialRecord();
            $official_record->from_user_id = $user->id;
            $official_record->action = 0; // 0: リクエスト送付 1:入金確認 2: スケジュール確定 3: 実施
            $official_record->debit = -1;
            $official_record->balance = $previous_record->balance - 1;
            $official_record->save();
        }else
        {
            $official_record = new OfficialRecord();
            $official_record->from_user_id = $user->id;
            $official_record->action = 0; // 0: リクエスト送付 1:入金確認 2: スケジュール確定 3: 実施
            $official_record->debit = -1;
            $official_record->balance = -1;
            $official_record->save();
        }
        
        // 二重送信防止
        $request->session()->regenerateToken();
        
        //入力されたメールアドレスにメールを送信
        \Mail::send(new OfficialRequestMail([
            'to' => $request->email,
            'to_name' => $request->name,
            'from'=>'rolemy.info@gmail.com',
            'from_name' => 'ROLEMY',
            'subject' => '公式メンター相談申込受付完了のお知らせ',
            'plan'=>$request->plan,
            'mentor_id'=>$request->mentor_id,
            'goal'=>$request->goal,
            'questions'=>$request->questions,
            'dates'=>$request->dates,
        ], 'to'));
        
        //自分に送るメール
        \Mail::send(new OfficialRequestMail([
            'to' => 'rolemy.official.requests@gmail.com',
            'to_name'=>'ROLEMY',
            'from' => $request->email,
            'from_name' => $request->name,
            'subject' => '公式メンター申し込み',
            'plan'=>$request->plan,
            'mentor_id'=>$request->id,
            'goal'=>$request->goal,
            'questions'=>$request->questions,
            'dates'=>$request->dates,
        ], 'from'));
    
        return view('official_mentors.complete', [
            'user' => $user
            ]);
    }
    
    public function show_records() 
    {
        $user=Auth::user();
        
        //入金履歴の取得
        $records = OfficialRecord::where(function($query) use($user){
            $query->where('from_user_id', $user->id);
        })->orderBy('created_at', 'asc')->paginate(20);
        
        //最新のレコードを取得
        $latest_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        //スケジュールの取得
        $meetings = Schedule::where(function($query) use($user) {
            $query->where('from_user_id', $user->id);
        })->orderBy('dates', 'asc')->get();
        
        //件数をロード
        
        $user->loadCount(['mentor_requestings' => function ($query) {
            $query->where('mentor_requests.status', 0);
        }]);
        
        $user->loadCount(['requesters' => function ($query) {
            $query->where('mentor_requests.status', 0);
        }]);
        
        $user->mentor_requests_count = $user->matchings()->count();
        
        return view('users.official_status', [
            'user'=>$user,
            'records'=>$records,
            'meetings'=>$meetings,
            'latest_record'=>$latest_record
            ]);
    }
    
    public function request_form() {
        $user = Auth::user();
        
        $latest_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        return view('official_mentors.request_form', [
            'user' => $user,
            'mentors'=>$mentors,
            'latest_record'=>$latest_record
            ]);
    }
}
