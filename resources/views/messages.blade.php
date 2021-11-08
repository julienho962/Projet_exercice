@extends('layouts.app')

@section('content')
    <div class="container">
        <ol>
            @foreach ($messages as $mes)
                <li> {{$mes->contenu}} </li>
            @endforeach
        </ol>
        
    </div>
@endsection