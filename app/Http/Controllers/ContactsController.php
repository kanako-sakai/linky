<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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
            'title' => ['required', 'string'],
            'body'=> ['required', 'string'],
        ]);
        
        $contact = new Contact($request->all());
        
        return view('contacts.confirm', ['contact'=>$contact]);
    }
    
    public function complete(Request $request)
    {
        // データを保存
        Contact::create($request->all());
 
        // 二重送信防止
        $request->session()->regenerateToken();
        
        return view('contacts.complete');
    }
}
