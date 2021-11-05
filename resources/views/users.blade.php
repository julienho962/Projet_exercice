@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $items)
                <tr>
                    <th scope="row"> {{$items->id}} </th>
                    <td> {{$items->name}} </td>
                    <td>{{$items->email}}</td>
                     @if (count($adresses)>0)
                        <td> {{ $adresses[$items->id-1]['ville'] }} </td>
                    @endif
                </tr> 
            @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
