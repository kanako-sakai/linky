<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficialRequest;//追加
use Auth;//追加
use App\User; //追加
use App\OfficialRecord;//
use App\Schedule;
use App\Mail\AdminEmail;
use App\MentorRequest;

class AdminController extends Controller
{
    public function index()
    {
        //公式リクエストを出しているユーザーを抽出
        // $users = User::has('official_requests')->get();
        
        $records= MentorRequest::where('status',2)->get();
        
        return view('admin.index',[
            'records' => $records,
        ]);
    }

    
    public function records($id)
    {
        $user = User::findOrFail($id);
        
        $records = OfficialRecord::where('from_user_id', $user->id)->orderBy('created_at', 'asc')->paginate(20);
        
        return view('admin.records',[
            'user'=>$user,
            'records'=>$records,
        ]);
    }
    
    public function confirm_payment1($id)
    {
        $user = User::findOrFail($id);
        
        $previous_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        //データをofficial_recordに保存
        $official_record = new OfficialRecord();
        $official_record->from_user_id = $user->id;
        $official_record->action = 1; // 0: リクエスト送付 / 1: 入金確認 / 2: 実施 
        $official_record->credit = 1;
        $official_record->balance = $previous_record->balance + 1;
        $official_record->save();
        
        return back();
    }
    
    public function confirm_payment3($id)
    {
        $user = User::findOrFail($id);
        
        $previous_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        //データをofficial_recordに保存
        $official_record = new OfficialRecord();
        $official_record->from_user_id = $user->id;
        $official_record->action = 1; // 0: リクエスト送付 / 1: 入金確認 / 2: 実施 
        $official_record->credit = 3;
        $official_record->balance = $previous_record->balance + 3;
        $official_record->save();
        
        return back();
    }
    
    public function confirm_payment5($id)
    {
        $user = User::findOrFail($id);
        
        $previous_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        //データをofficial_recordに保存
        $official_record = new OfficialRecord();
        $official_record->from_user_id = $user->id;
        $official_record->action = 1; // 0: リクエスト送付 / 1: 入金確認 / 2: 実施 
        $official_record->credit = 5;
        $official_record->balance = $previous_record->balance + 5;
        $official_record->save();
        
        return back();
    }
    
    public function schedule_index($id)
    {
        $user=User::findOrFail($id);

        $meetings = Schedule::where(function($query) use($user) {
            $query->where('from_user_id', $user->id);
        })->orderBy('dates', 'asc')->get();
        
        return view('admin.schedule_index',[
            'user'=>$user,
            'meetings'=>$meetings
        ]);
    }
    
    public function schedule($id)
    {
        $user = User::findOrFail($id);
        
        $mentor=Auth::user();
        
        $mentors = User::where('role', 2)->orWhere('role', 1)->get()->pluck('name', 'id');
        
        return view('admin.schedule', [
            'user'=>$user,
            'mentors'=>$mentors,
            'mentor'=>$mentor,
        ]);
    }
    
    public function register_schedule(Request $request)
    {
        $request->validate([
            'from_user_id'=>['required'],
            'mentor_id'=>['required'],
            'dates'=>['required'],
            'times'=>['required'],
            'zoom_link'=>['required']
        ]);
        
        $schedule = new Schedule();
        $schedule->from_user_id = $request->from_user_id;
        $schedule->mentor_id = $request->mentor_id;
        $schedule->dates = $request->dates;
        $schedule->times = $request->times;
        $schedule->zoom_link = $request->zoom_link;
        $schedule->save();

        $user=$schedule->sender()->first();
        
        $meetings = Schedule::where(function($query) use($user) {
            $query->where('from_user_id', $user->id);
            $query->where('conducted', 0);
        })->orderBy('dates', 'asc')->get();
        
        return redirect()->route('schedule_index', [
            'id' => $user->id,
            'meetings'=> $meetings
        ]);
        
    }
    
    public function conducted($id)
    {
        $schedule = Schedule::findOrFail($id);
        
        if($schedule->mentor_id !== Auth::id() && Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $user=$schedule->sender()->first();
        
        //スケジュールとなっていたレコードのconductedを1に変更する
        $schedule->conducted = 1;
        $schedule->save();
        
        //実行したというレコードを保存
        $previous_record = OfficialRecord::where('from_user_id', $user->id)->latest()->first();
        
        $official_record = new OfficialRecord();
        $official_record->from_user_id = $user->id;
        $official_record->action = 2; // 0: リクエスト送付 / 1: 入金確認 / 2: 実施
        $official_record->balance = $previous_record->balance;
        $official_record->save();
        
        //マッチングのステータスを元に戻す
        \Auth::user()->requesters()->updateExistingPivot($user->id, ['status' => '0']);
            
        //メールを送る
        //入力されたメールアドレスにメールを送信
        \Mail::send(new AdminEmail([
            'to' => $user->email,
            'to_name' => $user->name,
            'from'=>'rolemy.official.requests@gmail.com',
            'from_name' => 'rolemy',
            'subject' => '【公式メンター相談】アンケートにご協力お願いします',
            'schedule'=>$schedule->dates."".$schedule->times,
        ], 'to'));
        
        //自分に送るメール
        \Mail::send(new AdminEmail([
            'to' => 'rolemy.official.requests@gmail.com',
            'to_name'=>'rolemy',
            'from' => $user->email,
            'from_name' => $user->name,
            'subject' => '公式メンター相談実施履歴',
            'schedule'=>$schedule->dates."".$schedule->times,
        ], 'from'));
        
        return back();
    }
    
        
    public function staff()
    {
        $staff = Auth::user();
        
        // $users = User::whereHas('official_requests', function($query) use($staff) {
        //     $query->where('mentor_id', $staff->id);
        // })->get()
        
        $records= MentorRequest::where(function($query) use ($staff) {
            $query->where('to_user_id', $staff->id);
            $query->where('status',2);
        })->get();
        
        return view('admin.staff',[
            'staff' => $staff,
            'records'=>$records,
        ]);
    }

    public function staffSchedule()
    {
        $user = Auth::user();
        
        $meetings = Schedule::where(function($query) use($user) {
            $query->where('mentor_id', $user->id);
            $query->where('conducted', 0);
        })->orderBy('dates', 'asc')->get();
        
        return view('admin.staff_schedule',[
            'user' => $user,
            'meetings' => $meetings
        ]);
    }
    
    public function staff_auth($id) 
    {
        $user = User::findOrFail($id);
        
        $user->role = 2;
        $user->save();
        
        return back();
    }
    
    public function cancel_schedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        
        //メンターである場合は、削除
        if(\Auth::id() === $schedule->mentor_id) {
            $schedule->delete();
        }
        
        return back();
    }
}
