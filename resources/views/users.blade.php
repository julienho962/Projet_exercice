@extends('layouts.app')

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
          <a href=" {{route('home')}} ">Retourner à la page d'accueil?</a>
    </div>
</div>
@endsection
