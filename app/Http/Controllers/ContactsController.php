<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactSendmail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'title' => ['required', 'string', 'max:50'],
            'body'=> ['required', 'min:3', 'max:1000'],
        ]);
        
        $contact = new Contact($request->all());
        
        return view('contacts.confirm', ['contact'=>$contact]);
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'title' => ['required', 'string', 'max:50'],
            'body'=> ['required', 'min:3', 'max:1000'],
        ]);
        
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('contacts.index')
                ->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            \Mail::send(new ContactSendmail([
                'to' => $request->email,
                'to_name' => $request->name,
                'from'=>'rolemy.info@gmail.com',
                'from_name' => 'ROLEMY',
                'subject' => 'お問い合わせ受付完了のお知らせ',
                'title'=>$request->title,
                'body' => $request->body
            ], 'to'));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();
            
            //自分に送るメール
            \Mail::send(new ContactSendmail([
                'to' => 'rolemy.info@gmail.com',
                'to_name'=>'ROLEMY',
                'from' => $request->email,
                'from_name' => $request->name,
                'subject' => 'お客様からのお問い合わせ',
                'title'=>$request->title,
                'body' => $request->body
            ], 'from'));

            //送信完了ページのviewを表示
            return view('contacts.complete');
            
        }
    }    
}
