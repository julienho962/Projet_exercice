@extends('layouts.app')

@section('content')
    <table border="4">
        <thead>
            <th>Nom</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    
                        <td><a href=" {{$user->email}} "> {{$user->name}} </a></td>
                        <td><a href=" {{$user->email}} "> {{$user->email}} </a></td>
                 
                </tr>
            @endforeach
            
        </tbody>
    </table>
    <div>
        <a href=" {{route('home')}} ">Retourner à la page d'accueil</a>
    </div>


@endsection
