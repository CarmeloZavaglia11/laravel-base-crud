@extends('layouts/app')

@section('title',"modifica $car->modello")
    
@section('content')
    <form action="{{route('cars.update',$car->id)}}" method="post">
        @csrf
        @method('PATCH')
        <label for="marca">Marca</label>
        <input type="text" name="marca" placeholder="Marca" id="marca" value="{{$car->marca}}">
        <label for="modello">Modello</label>
        <input type="text" name="modello" placeholder="Modello" id="modello" value="{{$car->modello}}">
        <label for="targa">Targa</label>
        <input type="text" name="targa" placeholder="Targa" id="targa" value="{{$car->targa}}">
        <label for="prezzo">Prezzo</label>
        <input type="number" name="prezzo" placeholder="Prezzo" id="prezzo" value="{{$car->prezzo}}">
        <input type="submit" value="Invia">
    </form>  
@endsection