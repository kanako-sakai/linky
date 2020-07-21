<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //追加

use App\User; //追加
use App\Profile;//追加
use App\Industry;//追加
use App\JobCategory;//追加
use App\MentorRequest; //追加
use App\DirectMessage;//追加
use Auth;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        // // ユーザ一覧をidの降順で取得
        // $users = User::orderBy('id', 'desc')->paginate(10);

        // // ユーザ一覧ビューでそれを表示
        // return view('users.index2', [
        //     'users' => $users,
        // ]);
        
        $users = User::whereHas('profile', function($query) use($request) {

            //$request->input()で検索時に入力した項目を取得
            $s_industry=$request->input('industry_id');
            $s_jobcategory=$request->input('job_category_id');
            $s_expat=$request->input('expat');
            $s_mba=$request->input('mba');
            $s_otherstudyabroad=$request->input('other_study_abroad');
            $s_returnee=$request->input('returnee');
            $s_careerchange=$request->input('career_change');
            $s_marriage=$request->input('marriage_status');
            $s_child=$request->input('child_status');
        
            if($request->has('industry_id') && $s_industry != '指定なし') {
                $query->where('industry_id', $s_industry);
            }
            
            if($request->has('job_category_id') && $s_jobcategory != '指定なし') {
                $query->where('job_category_id', $s_jobcategory);
            }
            
            if(!empty($s_expat)) {
                $query->where('expat', $s_expat);
            }
            
            if(!empty($s_mba)){
                $query->where('mba', $s_mba);
            }
            
            if(!empty($s_otherstudyabroad)){
                $query->where('other_study_abroad', $s_otherstudyabroad);
            }
            
            if(!empty($s_returnee)){
                $query->where('returnee',$s_returnee);
            }
            
            if(!empty($s_careerchange)){
                $query->where('career_change', $s_careerchange);
            }
            
            if(!empty($s_marriage)){
                $query->where('marriage_status',$s_marriage);
            }
            
            if(!empty($s_child)){
                $query->where('child_status', $s_child);
            }
        })->paginate(20);
        
        $industries = Industry::all()->pluck('name', 'id');
        $job_categories = JobCategory::all()->pluck('name', 'id');
        
        return view('users.index',[
            'users' => $users,
            'industries' => $industries, 
            'job_categories' => $job_categories,
            ]);
    }    
    
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        //idと一致するプロフィールを取得
        $profile = $user->profile()->first();
        
        $industry = Industry::find($profile->industry_id)->name;
        $job_category = JobCategory::find($profile->job_category_id)->name;
        
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            'profile' => $profile,
            'industry' => $industry,
            'job_category' => $job_category,
        ]);
    }
    
    //メンターリクエスト関連
    
    public function mentor_requestings()
    {
        $user = Auth::user();
        
        $mentor_requestings=MentorRequest::where(function($query) {
            $its_me = Auth::user();
            $query->where('from_user_id', $its_me->id);
            $query->where('status',0);
        })->paginate(10);
        
        return view('users.mentor_requestings',[
            'user' => $user,
            'mentor_requestings' => $mentor_requestings,
        ]);
    }
    
    public function requesters()
    {
        $user = Auth::user();
        
        $requesters = MentorRequest::where(function($query) {
            $its_me = Auth::user();
            $query->where('to_user_id', $its_me->id);
            $query->where('status',0);
        })->paginate(10);
        
        return view('users.requesters',[
            'user' => $user,
            'requesters' => $requesters,
        ]);
    }
    
    public function matches()
    {
       $user = Auth::user();
       
       //承諾された自分が送ったリクエスト
       $matches_from_me = MentorRequest::where(function($query) {
            $its_me = Auth::user();
            $query->where('from_user_id', $its_me->id);
            $query->where('status',1);
        })->paginate(10);
        
        // 承諾された自分に届いたリクエスト
        $matches_from_others = MentorRequest::where(function($query) {
            $its_me = Auth::user();
            $query->where('to_user_id', $its_me->id);
            $query->where('status',1);
            })->paginate(10);
        
        return view('users.matches',[
            'user' => $user,
            'matches_from_me'=> $matches_from_me,
            'matches_from_others' => $matches_from_others,
        ]);    
    }
    
    //ダイレクトメッセージの表示
    public function show_messages($id)
    {
        
        //自分のid
        $its_me = Auth::user();
        
        // TODO: 自分とidがマッチしているかを確認
       
        
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        $messages = DirectMessage::where(function($query) use($id, $its_me) {
            $query->where('from_user_id', $id);
            $query->where('to_user_id', $its_me->id);
        })
            ->orWhere(function($query) use($id, $its_me) {
                $user = User::findOrFail($id);
                $its_me = Auth::user();
                
                $query->where('to_user_id', $id);
                $query->where('from_user_id', $its_me->id);
            })->orderBy('created_at', 'desc')->get();
        
        return view('direct_message.messages',[
            'user' => $user,
            'messages'=> $messages,
        ]);    
    }
    
}
