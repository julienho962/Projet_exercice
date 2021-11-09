@extends('layouts.app')

@section('title')
    Discussions
@endsection

@section('leftNavbar')
    <li class="nav-item">
        <a class="nav-link" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('liste')}} ">Utilisateurs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('voir', ['email' => auth()->user()->email])}} ">Mon Espace</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href=" {{route('discussions')}} ">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('affiche')}} ">Modifier mot de passe</a>
    </li>
@endsection

@section('content')
    <div class="container">   
        <div class="row justify-content-center">
            
            <div>
                <form action="{{route('nouveau')}}" method="post" >
                    @csrf    
                    <div class="form-group">
                        <label for="message">Ecrire un message:</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message!"></textarea>
                        </div>
                    @if($errors->has('message'))
                        <p class="help is-danger">{{ $errors->first('message') }}</p>
                    @endif
                
                    <div class="field">
                            <button class="btn btn-primary" type="submit">Publier</button>
                    </div>
                </form> 
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Discussions') }}</div>
    
                    <div class="card-body">
                        <ul>
                            @foreach ($messages as $mes)
                                <div class="card">
                                    <div class="card-header">
                                        {{$mes->user->name}}
                                    </div>
                                    <div class="card-body">
                                        <li> {{$mes->contenu}} </li>
                                    </div>

                                </div> <br>      
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection