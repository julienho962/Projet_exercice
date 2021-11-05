@extends('layouts.app')

@section('content')
    <h1>Infos Utilisateur</h1>
    <table>
        <tr>
            <td>Nom:</td><td> {{$user->name}} </td>
        </tr>
        <tr>
            <td>Email:</td><td> {{$user->email}} </td>
        </tr>
    </table>
    <a href=" {{route('liste')}} ">Retour sur la liste des utlisateurs</a> <br>
    <a href=" {{route('home')}} ">Aller à la page d'accueil?</a>

@endsection
