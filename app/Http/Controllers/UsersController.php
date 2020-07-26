<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //追加
use Illuminate\Support\Facades\Storage; //追加


use App\User; //追加
use App\Profile;//追加
use App\Industry;//追加
use App\JobCategory;//追加
use App\MentorRequest; //追加
use App\DirectMessage;//追加
use App\CancelReason;//追加
use Auth;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereHas('profile', function($query) use($request) {

            //$request->input()で検索時に入力した項目を取得
            $s_intro=$request->input('intro');
            $s_industry=$request->input('industry_id');
            $s_jobcategory=$request->input('job_category_id');
            $s_expat=$request->input('expat');
            $s_mba=$request->input('mba');
            $s_otherstudyabroad=$request->input('other_study_abroad');
            $s_returnee=$request->input('returnee');
            $s_careerchange=$request->input('career_change');
            $s_marriage=$request->input('marriage_status');
            $s_child=$request->input('child_status');
            $s_can_mentor=$request->input('can_mentor');
            
            // $query->where('industry_id', $s_industry)
            //     ->orWhere('job_category_id', $s_jobcategory)
            //     ->orWhere('expat', $s_expat)
            //     ->orWhere('mba', $s_mba)
            //     ->orWhere('other_study_abroad', $s_otherstudyabroad)
            //     ->orWhere('returnee',$s_returnee)
            //     ->orWhere('career_change', $s_careerchange)
            //     ->orWhere('marriage_status',$s_marriage)
            //     ->orWhere('child_status', $s_child)
            //     ->orWhere('intro', 'like', '%'.$s_intro.'%')
            //     ->orWhere('can_mentor', $s_can_mentor);
            // })->paginate(20);
        
            if($s_intro !== null) 
            {
                $query->where('intro', 'like', '%'.$s_intro.'%');
            }
        
            if($s_industry !== null && $s_industry != '指定なし') {
                $query->where('industry_id', $s_industry);
            }    
        
            if($s_jobcategory !== null && $s_jobcategory != '指定なし') {
                $query->where('job_category_id', $s_jobcategory);
            }
            
            if($s_expat !== null){
                $query->where('expat', $s_expat);
            }
            
            if($s_mba !== null){
                $query->where('mba', $s_mba);
            }
            
            if($s_otherstudyabroad !== null){
                $query->where('other_study_abroad', $s_otherstudyabroad);
            }
            
            if($s_returnee!== null){
                $query->where('returnee',$s_returnee);
            }
            
            if($s_careerchange !== null){
                $query->where('career_change', $s_careerchange);
            }
            
            if($s_marriage !== null){
                $query->where('marriage_status',$s_marriage);
            }
            
            if($s_child !== null){
                $query->where('child_status', $s_child);
            }
            
            if($s_can_mentor !== null){
                $query->where('can_mentor', $s_can_mentor);
            }
        })->paginate(10);
    
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
        
        //件数をロード
        $user->loadCount(['mentor_requestings' => function ($query) {
            $query->where('mentor_requests.status', 0);
        }]);
        
        $mentor_requestings=MentorRequest::where(function($query) use($user) {
            $query->where('from_user_id', $user->id);
            $query->where('status',0);
        })->paginate(10);
        
        return view('users.mentor_requestings',[
            'user' => $user,
            'mentor_requestings' => $mentor_requestings,
            'count_mentor_requestings'=>$mentor_requestings,
        ]);
    }
    
    public function requesters()
    {
        $user = Auth::user();
        
        //件数をロード
        $user->loadCount(['requesters' => function ($query) {
            $query->where('mentor_requests.status', 0);
        }]);
        
        $requesters = MentorRequest::where(function($query) use($user) {
            $query->where('to_user_id', $user->id);
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
       
      //Todo: 件数をロード
        $user->mentor_requests_count = $user->matchings()->count();
       
       //承諾された自分が送ったリクエスト
       $matches_from_me = MentorRequest::where(function($query) use($user) {
            $query->where('from_user_id', $user->id);
            $query->where('status',1);
        })->paginate(10);
        
        // 承諾された自分に届いたリクエスト
        $matches_from_others = MentorRequest::where(function($query) use($user) {
            $query->where('to_user_id', $user->id);
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
        
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        //マッチングしているかの確認
        $is_matching = $its_me->is_matching($id);
        
        $messages = DirectMessage::where(function($query) use($id, $its_me) {
            $query->where('from_user_id', $id);
            $query->where('to_user_id', $its_me->id);
        })
            ->orWhere(function($query) use($id, $its_me) {
                $query->where('to_user_id', $id);
                $query->where('from_user_id', $its_me->id);
            })->orderBy('created_at', 'asc')->get();
        
        if (! $is_matching) {
            return back();
        } else {
            return view('direct_message.messages',[
                'user' => $user,
                'messages'=> $messages,
                ]);
            }    
    }
    
    //プロフィールの編集
    public function edit()
    {
        $user = Auth::user();
    
        $profile = $user->profile()->first();
        
        $industries = Industry::all()->pluck('name', 'id');
        $job_categories = JobCategory::all()->pluck('name', 'id');
        
        //編集ビューでそれを表示
        return view('users.profile_edit', [
            'user' => $user,
            'profile' => $profile,
            'industries' => $industries,
            'job_categories' => $job_categories,
        ]);
    }
    
    //プロフィール編集の更新処理
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        
        $profile = $user->profile()->first();
        
        //プロフィールを更新
        $profile->user_id=$user->id;
        $profile->education = $request->education;
        $profile->working_years = $request->working_years;
        $profile->employee = $request->employee;
        $profile->industry_id = $request->industry_id;
        $profile->job_category_id= $request->job_category_id;
        $profile->expat = $request->expat;
        $profile->mba = $request->mba;
        $profile->other_study_abroad = $request->other_study_abroad;
        $profile->returnee = $request->returnee;
        $profile->career_change = $request->career_change;
        $profile->marriage_status = $request->marriage_status;
        $profile->child_status = $request->child_status;
        $profile->can_mentor = $request->can_mentor;
        $profile->intro = $request->intro;
        $profile->save();
        
        //マイページに戻る
        return redirect()->route('users.show', ['user' => \Auth::id()]);
    }
    
    //退会フォームの表示
    public function showCancelForm() 
    {
        $user = Auth::user();
        
        $cancel_reasons = CancelReason::all()->pluck('name', 'id');
        
        return view('cancel.cancel_form', [
            'user' => $user,
            'cancel_reasons' => $cancel_reasons,
        ]);
    }
    
    // //退会処理
    // public function cancel(Request $request)
    // {
    //     $user = Auth::user();
        
    //     $user->cancel_reason_id = $request->cancel_reason_id;
    //     $user->save();
        
    //     Auth::logout(); //ログアウト
    //     $user->delete();
        
    //     //トップページへリダイレクト
    //     return redirect('/');    
    // }
    
    // //リレーションも削除
    // protected static function boot()
    // {
    //     parent::boot();
        
    //     static::deleted(function ($user) {
    //         $user->profile()->delete();
    //         $user->mentor_requests()->delete();
    //         $user->direct_messages()->delete();
    //     });
    // }
    
    //プロフィール写真
    public function showPictureForm()
    {
        $user = Auth::user();
        
        return view('users.picture', [
            'user' => $user,
            ]);
    }
    
    public function upload(Request $request)
    {
        $user = Auth::user();
        
        $form = $request->all();

        //s3アップロード開始
        $image = $request->file('image');
        // バケットの`linkyprofilepictures`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('linkyprofilepictures', $image, 'public');
        // アップロードした画像のフルパスを取得
        $user->picture = Storage::disk('s3')->url($path);
        
        $user->save();

      return redirect('/');
    }
    
    public function picture_exists($id)
    {
        $user = findOrFail($id);
        
        return $user->picture->exists();
    }
    
    //公式メンターリストを表示
    public function official_mentors()
    {
        return view('official_mentors.index');
    }
    
    //公式メンターリクエストフォームの表示
    public function payment()
    {
        return view('official_mentors.payment');
    }
}
