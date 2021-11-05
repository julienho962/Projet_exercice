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
    <div>
        @if (auth()->check() AND auth()->id() === $user->id)
            <form action="/messages" method="post">
                @csrf
            
                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Qu'avez-vous à dire ?"></textarea>
                    </div>
                    @if($errors->has('message'))
                        <p class="help is-danger">{{ $errors->first('message') }}</p>
                    @endif
                </div>
            
                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Publier</button>
                    </div>
                </div>
            </form>
            <div>
               
                <ol>
                    @foreach ($messages as $message)
                        <li> {{$message->contenu}} </li>
                    @endforeach
                </ol>
                
            </div>
            
        @endif
    </div>
    <a href=" {{route('liste')}} ">Retour sur la liste des utlisateurs</a> <br>
    <a href=" {{route('home')}} ">Aller à la page d'accueil?</a>

@endsection
