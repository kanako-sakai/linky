<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectMessage;
use App\Mail\DirectMessageMail;
use App\User;

class DirectMessageController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'message' => ['required'] ]);
            
        //メッセージの保存
        $message = $request->message;
        
        //認証済みのユーザがidのユーザにリクエストを送る
        \Auth::user()->send_message($id, $request->message);
        
        //メール送信
        $to_user=User::findOrFail($id);
        
        \Mail::send(new DirectMessageMail([
            'to' => $to_user->email,
            'to_name' => $to_user->name,
            'from'=>'rolemy.info@gmail.com',
            'from_name' => \Auth::user()->name,
            'subject' => '【rolemy】メッセージが届きました！',
            'message'=>$request->message,
        ]));    
        //前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($id)
    {
        $message = DirectMessage::findOrFail($id);
        
        //認証済みのユーザがその少輔者である場合は、メッセージを削除
        if(\Auth::id() === $message->from_user_id) {
            $message->delete();
        }
        
        return back();
    }
    
    public function official_store(Request $request, $id)
    {
        $request->validate([
            'message' => ['required'] ]);
            
        //メッセージの保存
        $message = $request->message;
        
        //認証済みのユーザがidのユーザにリクエストを送る
        \Auth::user()->send_official_message($id, $request->message);
        
        //メール送信
        $to_user=User::findOrFail($id);
        
        \Mail::send(new DirectMessageMail([
            'to' => $to_user->email,
            'to_name' => $to_user->name,
            'from'=>'rolemy.info@gmail.com',
            'from_name' => \Auth::user()->name,
            'subject' => '【rolemy】メッセージが届きました！',
            'message'=>$request->message,
        ]));    
        
        //前のURLへリダイレクトさせる
        return back();
    }
}
