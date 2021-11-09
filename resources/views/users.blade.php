@extends('layouts.app')

@section('title')
    Users
@endsection

@section('leftNavbar')
    <li class="nav-item">
        <a class="nav-link" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href=" {{route('liste')}} ">Utilisateurs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('voir', ['email' => auth()->user()->email])}} ">Mon Espace</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('discussions')}} ">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('affiche')}} ">Modifier mot de passe</a>
    </li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                  
                    <th scope="row"><a href=" {{route('voir', ['email' => $user->email])}} "> {{$user->id}} </a></th> 
                    <td><a href=" {{route('voir', ['email' => $user->email])}} "> {{$user->name}} </a></td>
                    <td><a href=" {{route('voir', ['email' => $user->email])}} ">{{$user->email}}</a></td>
                     @if ($user->adresse)
                        <td><a href=" {{route('voir', ['email' => $user->email])}} "> {{$user->adresse->ville}} </a></td>
                    @endif
                  
                </tr> 
            @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
