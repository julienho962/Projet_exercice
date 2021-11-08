@extends('layouts.app')

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
                    <div>
                        <a href=" {{route('liste')}} ">Voir la liste des utilisateurs?</a>
                    </div>
                    <div>
                        <a href=" {{route('voir', ['email' => auth()->user()->email])}} ">Allez à votre espace?</a>
                    </div>

                    {{ __('Vous êtes connecté!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
