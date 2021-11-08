<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Models\Adresse;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste(){
        $users = User::all();
        $adresses = Adresse::all();

        return view('users', compact('users', 'adresses'));
    }
    public function voir(){
        $user = User::where('email', request('email'))->first();
        $messages = $user->messages;
        return view('user', compact('user'));
    }

    //modification de mot de passe
    public function afficheModifier(){
        return view('modifier');
    }
    public function modifierPassword(){
        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);
        auth()->user()->update(['password' => Hash::make(request('password'))]);
        Session::flash('success', 'Votre mot de passe a été modifié avec succès.');
        return redirect('home');
    }
}
