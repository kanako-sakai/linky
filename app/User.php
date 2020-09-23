<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Notifications\PasswordResetNotification;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified','email_verify_token','token_expiration','valid_datetime','card_number','stripe_token', 'agree',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email_auth_number','card_number', 'stripe_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function industries()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function job_categories()
    {
        return $this->belongsTo(JobCategory::class);
    }
    
    public function cancel_reasons()
    {
        return $this->belongsTo(CancelReason::class);
    }
    
    /**
     * このユーザがリクエストを出したユーザ
     */
    public function mentor_requestings()
    {
        return $this->belongsToMany(User::class, 'mentor_requests', 'from_user_id', 'to_user_id')->withTimestamps();
    }
    
    /**
     * このユーザにリクエストを出したユーザ
     */
    public function requesters()
    {
        return $this->belongsToMany(User::class, 'mentor_requests', 'to_user_id', 'from_user_id')->withTimestamps();
    }
    
    /**
     * マッチングしたユーザー
     */
    public function matches()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * MentorRequestモデルとの関係性を定義
     */
    public function mentor_requests()
    {
        return $this->hasMany(MentorRequest::class);
    }
    
    /**
     * $userIdで指定されたユーザにリクエストを出す。
     */
     
    public function mentor_request($userId, $message) 
    {
    
        //すでにリクエストしたかの確認
        $exist = $this->is_requesting($userId);
        //すでにリクエストをもらっているかの確認
        $exist_requested = $this->is_requesting($userId);
        //相手が自分自身かどうかの確認
        $its_me = $this->id == $userId;
        
        if ($exist || $its_me || $exist_requested) {
            // 既にリクエストしていたら何もしない
            return false;
        }else {
            //リクエストしていなければリクエストする
            $this->mentor_requestings()->attach($userId, ['message'=> $message]);
    
            return true;
        }
    }
    
    /**
     * リクエストを取り消す
     */
    public function undo_request($userId)
    {
        //すでにリクエストしたかの確認
        $exist = $this->is_requesting($userId);
        //相手が自分自身かどうかの確認
        $its_me = $this->id == $userId;
        
        if ($exist && !$its_me) {
            //すでにリクエストしていればリクエストを取りやめる
            $this->mentor_requestings()->detach($userId);
            return true;
        } else {
            //リクエストしていなければ何もしない
            return false;
        }    
    }
    
    /**
     * リクエスト中のユーザの中に$userIdのものが存在するか
     */
     
    public function is_requesting($userId)
    {
        return $this->mentor_requestings()->where('to_user_id', $userId)->exists();
    }
    
    /**
     * リクエストをもらっているユーザの中に$userIdが存在するか
     */
    public function is_requested($userId)
    {
       return $this->requesters()->where('from_user_id', $userId)->exists();
    }
    
    /**
     * リクエストを承認
     */
    
    public function accept($userId)
    {
        //リクエストをもらっているかの確認
        $exist = $this->is_requested($userId);
        
        
        if ($exist) {
            //すでにリクエストをもらっていたら承認する
            $this->requesters()->updateExistingPivot($userId, ['status' => '1']); //0=default; 1=accepted
            return true;
        } else {
            //リクエストしていなければ何もしない
            return false;
        }
    }    
    
    /**
     * リクエストを拒否
     */
    public function decline($userId)
    {
        //リクエストをもらっているかの確認
        $exist = $this->is_requested($userId);

        if ($exist) {
            //すでにリクエストもらっていたら拒否する
            $this->requesters()->updateExistingPivot($userId, ['status' => '9']); //9=declined
            return true;
        } else {
            //リクエストしていなければ何もしない
            return false;
        }
    }
    
    //自分が出したリクエストが拒否されているかどうか
    public function myRequestDenied($userId)
    {
        return MentorRequest::where(function($query) use($userId) {
            $query->where('to_user_id', $userId);
            $query->where('from_user_id', $this->id);
            $query->where('status', 9);
        })->exists();
    }
    
    //相手からきたリクエストを拒否したか
    public function DeniedOthersRequest($userId)
    {
        return MentorRequest::where(function($query) use($userId) {
            $query->where('to_user_id', $this->id);
            $query->where('from_user_id', $userId);
            $query->where('status', 9);
        })->exists();
    }
    /**
     * マッチングが成立しているかどうか
     */
    public function is_matching($userId)
    {
        //承諾された自分が送ったリクエスト
        return MentorRequest::where(function($query) use($userId) {
            $query->where('from_user_id', $this->id);
            $query->where('to_user_id', $userId);
            $query->where('status',1);
        })->orWhere(function($query) use($userId) {
                $query->where('to_user_id', $this->id);
                $query->where('from_user_id', $userId);
                $query->where('status',1);
        })->exists();
    }
    
    //公式メンターとマッチングしているか
    public function is_official_matching($userId)
    {
        return MentorRequest::where(function($query) use($userId) {
            $query->where('from_user_id', $this->id);
            $query->where('to_user_id', $userId);
            $query->where('status',2);
        })->exists();
    }   
    
    public function matchings()
    {
        return MentorRequest::where(function($query) {
            $query->where('from_user_id', $this->id);
            $query->where('status',1);
        })->orWhere(function($query) {
                $query->where('to_user_id', $this->id);
                $query->where('status',1);
        });
    }
    /**
     * DirectMessageモデルとの関係を定義
     */
    public function messages_sent()
    {
        return $this->belongsToMany(User::class, 'direct_messages', 'from_user_id', 'to_user_id')->withTimestamps();
    }
    
    public function messages_received()
    {
        return $this->belongsToMany(User::class, 'direct_messages', 'to_user_id', 'from_user_id')->withTimestamps();
    }
    
    public function direct_messages()
    {
        return $this->hasMany(DirectMessage::class);
    }
    
    public function send_message($userId, $message)
    {
        $is_matching = $this->is_matching($userId);
        
        if($is_matching) {
            // マッチングしていたらメッセージを送る
            $this->messages_sent()->attach($userId, ['message'=> $message]);
            return true; 
            
        }else {
            return false;
        }
    }
    
    public function send_official_message($userId, $message)
    {
        $this->messages_sent()->attach($userId, ['message'=> $message]);
    }
    
    //パスワードリセット
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token));
    }
    
    //  OfficialRequestモデルとの関係
    public function official_requests()
    {
        return $this->hasMany(OfficialRequest::class);
    }
    
    // OfficialRecordモデルとの関係
    public function official_records()
    {
        return $this->hasMany(OfficialRecord::class);
    }
    
    //Schedulesモデルとの関係
    public function schedules()
    {
        return $this->hasMany(Schedules::class);
    }
    
    // //userの論理削除に伴うリレーションの論理削除のため
    // protected static function boot()
    // {
    //     parent::boot();
        
    //     static::deleted(function ($user) {
    //         $user->profile()->delete();
    //         $user->mentor_requests()->delete();
    //         $user->direct_messages()->delete();
    //         $user->official_requests()->delete();
    //         $user->official_records()->delete();
    //         $user->schedules()->delete();
    //     });
    // }
}   