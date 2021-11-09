@extends('layouts.app')

@section('title')
    User
@endsection

@section('leftNavbar')
    <li class="nav-item">
        <a class="nav-link" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('liste')}} ">Utilisateurs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href=" {{route('voir', ['email' => auth()->user()->email])}} ">Mon Espace</a>
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
        <div class="card">
            <div class="card-header">
                Infos
            </div>
            <div class="card-body">
                <div>
                    Email: {{$user->email}}
                </div>
                <div>Nom: {{$user->name}} </div> 
                @if ($user->adresse)
                    <div>Adresse: {{$user->adresse->ville}} </div>
                    <div>Telephone: {{$user->adresse->telephone}} </div>
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
            </div>
        </div>
           
        
        
        
        @if (auth()->id() === $user->id)
            {{-- Formulaire ici --}}
            <form action="{{route('nouveau')}}" method="post" >
                @csrf    
                <div class="form-group">
                    <label for="message">Votre Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message!"></textarea>
                    </div>
                @if($errors->has('message'))
                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                @endif
            
                <div class="field">
                        <button class="btn btn-primary" type="submit">Publier</button>
                </div>
            </form>
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
            @endif

        @endif
        @if (count($messages))
                <div class="card">
                    <div class="card-header">
                        <div>Messages</div>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($messages as $mes)
                                <div class="card">
                                    <li> {{$mes->contenu}} </li>
                                </div> <br>              
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                
            @endif
    </div>
@endsection