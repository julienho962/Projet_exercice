@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('Vous êtes connecté!') }}
                </div>
                <div>
                    <a href="{{route('changer')}}">Changer votre mot de passe?</a>
                </div>
                <div>
                    <a href=" {{route('liste')}} ">Voir la liste des utilisateurs</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        
    </div>
</div>
@endsection
