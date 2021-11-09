<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
class MessageController extends Controller

{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nouveau(){
        request()->validate(['message' => ['required'],]);
        Message::create([
            'user_id' => auth()->id(),
            'contenu' => request('message'),
        ]);
        return back()->with('success','Message publié avec succès!');
    }

    public function listes(){
        $messages = Message::latest()->limit(20)->get();
        return view('messages', compact('messages'));
    }

    public function modifier(){
        
    }
}
