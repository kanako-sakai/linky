<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardsController extends Controller
{
    public function index()
    {
        //ログインユーザーのidを取得し、そのユーザーが送った、または受け取ったboardを取得
        $current_user_id = Auth::id();
        $boards = Board::where('from_user_id', $current_user_id)->orWhere('to_user_id', $current_user_id)->get();
        return view('direct_message.message_board', ['boards'=>$boards]);
    }
    
    public function show($id)
    {
        //ボードモデルおよびメッセージモデルから、クリックしたboard_idの情報を取得
        $messages = DirectMessage::where('board_id', $id)->get();
        $board = Board::find($id);
        
        return view('direct_message.messages', ['messages'=>$messages, 'board'=>$board]);
    }
    
    public function store(Request $request)
    {
        $board = new Board;
        $board->from_user_id = $request->from_user_id;
        $board->to_user_id = $request->to_user_id;
        $board->save();
        
        //boards一覧に戻る
        return redirect()->action(
            'BoardsController@index',
            ['board'=>$board]
        );
    }
}
