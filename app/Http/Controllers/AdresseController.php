<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Adresse;
use App\Models\User;

class AdresseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nouveau(Request $request){
        $request->validate([
            'ville' => ['required'],
            'telephone' => ['required'],
        ]);
        /* $user = auth()->user();
        $adresse = Adresse::create([
            'user_id' => auth()->id(),
            'ville' => $request->ville,
            'telephone' => $request->telephone,
        ]); */
        $user = auth()->user();

        $adresse = $user->adresse()->create([
            'user_id' => auth()->id(),
            'ville' => $request->ville,
            'telephone' => $request->telephone,
        ]);
        $adresse->save();
        return back()->with('success', 'Adresse ajouter avec succès.');
    }

    public function modifier(){
        request()->validate([
            'ville' => ['required'],
            'telephone' => ['required'],
        ]);
        auth()->user()->adresse()->update([
            'ville' => request('ville'), 
            'telephone' => request('telephone')]);
            Session::flash('success', 'Adresse modifier avec succès.');
            return redirect('home');   
    }
}
