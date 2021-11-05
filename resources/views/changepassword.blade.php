@extends('layouts.app')

@section('content')
<form action="{{ route('modifiermdp') }}" method="POST">
    @csrf

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau Mot de passe') }}</label>

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
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du Mot de passe') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __("Changer mot de passe") }}
            </button>
        </div>
    </div>
</form>
<div>
    <a href="{{route('home')}}">Retour sur la page d'accueil</a>
</div>
@endsection
