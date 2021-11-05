<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function liste(){
        $users = User::all();
        return view('users', ['users' => $users]);
    }
    public function voir(Request $request){
        $user = User::where('email', $request->email)->first();
        $messages = User::find($user->id)->messages;
        return view('user', compact('user', 'messages'));
    }
     
    public function formulaireChanger(){
        return view('changepassword');
    }
    
    public function modifiermdp(Request $request){
        $request->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);
        $user = auth()->user();
        $password = Hash::make($request->password);
        User::where('id', auth()->id())->update(['password' => $password]);
        return redirect('home')->with('status', 'Mot de passe changer avec succès');
        
    }
}
