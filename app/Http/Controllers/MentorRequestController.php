<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MentorRequestController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'message'=>['string', 'max:300']]);
            
        //メッセージの保存
        $message = $request->message;
        
        //認証済みのユーザがidのユーザにリクエストを送る
        \Auth::user()->mentor_request($id, $request->message);
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
        
        return back();
    }
    
    public function decline($id)
    {
        //承認済のユーザがidのユーザからのリクエストを拒否する
        \Auth::user()->decline($id);
        
        return back();
    }
}
