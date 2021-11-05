<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nouveau(){
        request()->validate([
            'message' => ['required'],
        ]);
        Message::create([
            'user_id' => auth()->id(),
            'contenu' => request('message'),
        ]);
        flash("Votre message a bien été publié.")->success();
        return back();
        
    }
}
