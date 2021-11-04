<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateursController extends Controller
{
    public function liste(){
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs', ['utilisateurs' => $utilisateurs]);
    }
}
