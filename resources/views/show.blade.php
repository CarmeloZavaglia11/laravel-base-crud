@extends('layouts/app')

@section('title',$car->modello)
    
@section('content')
        <ul>
            <li><a href="{{route('cars.edit',$car->id)}}">{{$car->marca}}</a></li>
            <li>{{$car->modello}}</li>
            <li>{{$car->targa}}</li>
            <li>{{$car->prezzo}}</li>
        </ul> 
@endsection