@extends('layouts/app')

@section('titolo','Concessionario')
    
@section('content')
    @foreach ($cars as $car)
        <ul>
            <li>{{$car->marca}}</li>
            <li>{{$car->modello}}</li>
            <li>{{$car->targa}}</li>
        </ul>
    @endforeach    
@endsection