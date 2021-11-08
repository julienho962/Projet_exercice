@extends('layouts.app')

@section('content')
    <div class="container">
        <header> Email: {{$user->email}} </header>
        <div>Nom: {{$user->name}} </div>    
        @if ($user->adresse)
            <div>Adresse: {{$user->adresse->ville}} </div>
        @else
            <div class="alert alert-danger" role="alert"> Pas d'adresse à afficher! Ajouter une adresse svp! </div>
            @if (auth()->id() === $user->id)
                <div>
                    <h3> Ajouter une Adresse:</h3>
                </div>
                <form action=" {{route('nouvel')}} " method="post">
                    @csrf
                    <div class="field-form-row">
                        <label for="ville" class="label">Ville:</label>
                        <input type="text" class="form-control" name="ville">
                    </div>
                    <div class="field-form-row">
                        <label for="telephone" class="label">Telephone:</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>
                
                    <div class="field">
                        <br>
                        <div class="control">
                            <button class="btn btn-primary" type="submit">Ajouter</button>
                        </div>
                    </div>
                </form>
                <div>
                    <br>
                </div>
            @else
                
            @endif
        @endif
        
        
        <a href=" {{route('home')}} ">Retourner à la page d'accueil?</a>
        @if (auth()->id() === $user->id)
            {{-- Formulaire ici --}}
            <form action="{{route('nouveau')}}" method="post">
                @csrf
                <div class="field">
                    <label class="label">Message:</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Qu'avez-vous à dire ?"></textarea>
                    </div>
                    @if($errors->has('message'))
                        <p class="help is-danger">{{ $errors->first('message') }}</p>
                    @endif
                </div>
            
                <div class="field">
                    <div class="control">
                        <button class="btn btn-primary" type="submit">Publier</button>
                    </div>
                </div>
            </form>
            <div>
                <a href=" {{route('discussions')}} ">Aller aux discussions?</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($user->messages))
                <ol>
                    @foreach ($user->messages as $mes)
                        <li> {{$mes->contenu}} </li>
                    @endforeach
                </ol>
                
            @endif

        @endif
    </div>
@endsection