@extends('layouts.app')

@section('title')
    Modifier mot de passe
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
    <li class="nav-item">
        <a class="nav-link" href=" {{route('discussions')}} ">Discussions</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href=" {{route('affiche')}} ">Modifier mot de passe</a>
    </li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier mot de passe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('modifier') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection