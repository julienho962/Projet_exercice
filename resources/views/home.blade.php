@extends('layouts.app')

@section('title')
    Home
@endsection

@section('leftNavbar')
    <li class="nav-item active">
        <a class="nav-link" href=" {{route('home')}} ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=" {{route('liste')}} ">Utilisateurs</a>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenue!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    {{ __('Vous êtes connecté!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
