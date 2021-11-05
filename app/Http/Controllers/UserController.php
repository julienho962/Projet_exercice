<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
