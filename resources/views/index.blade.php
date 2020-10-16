@extends('layouts/app')

@section('title','Concessionario')
    
@section('content')
    @foreach ($cars as $car)
        <ul>
            <li><a href="{{route('cars.show',$car->id)}}">{{$car->marca}}</a></li>
            <li>{{$car->modello}}</li>
            <li>{{$car->targa}}</li>
            <li>
                <form action="{{route('cars.destroy',$car->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella">
                </form>
            </li>
        </ul>
    @endforeach    
@endsection