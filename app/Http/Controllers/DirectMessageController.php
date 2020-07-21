<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectMessage;

class DirectMessageController extends Controller
{
    public function store(Request $request, $id)
    {
        //メッセージの保存
        $message = $request->message;
        
        //認証済みのユーザがidのユーザにリクエストを送る
        \Auth::user()->send_message($id, $request->message);
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
}
