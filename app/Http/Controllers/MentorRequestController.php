<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\MentorRequestMail;
use App\Mail\AcceptMail;

class MentorRequestController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'message'=>['max:500']]);
            
        //メッセージの保存
        $message = $request->message;
        
        //認証済みのユーザがidのユーザにリクエストを送る
        \Auth::user()->mentor_request($id, $request->message);
        
        //メール送信
        $to_user=User::findOrFail($id);
        
        \Mail::send(new MentorRequestMail([
            'to' => $to_user->email,
            'to_name' => $to_user->name,
            'from'=>'rolemy.info@gmail.com',
            'from_name' => \Auth::user()->name,
            'subject' => '【rolemy】相談リクエストが届きました！',
            'message'=>$request->message,
        ]));
        //前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($id)
    {
        //認証済みのユーザがidのユーザへのリクエストを取り消す
        \Auth::user()->undo_request($id);
        
        return back();
    }
    
    public function accept($id)
    {
        //承認済のユーザがidのユーザからのリクエストを承諾する
        \Auth::user()->accept($id);
        
        //メール送信
        $to_user=User::findOrFail($id);
        
        \Mail::send(new AcceptMail([
            'to' => $to_user->email,
            'to_name' => $to_user->name,
            'from'=>'rolemy.info@gmail.com',
            'from_name' => \Auth::user()->name,
            'subject' => '【rolemy】相談リクエストが承認されました！',
        ]));
        
        return back();
    }
    
    public function decline($id)
    {
        //承認済のユーザがidのユーザからのリクエストを拒否する
        \Auth::user()->decline($id);
        
        return back();
    }
}
