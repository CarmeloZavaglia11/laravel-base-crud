@extends('layouts/app')

@section('title','Concessionario')
    
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
    @endforeach
        </ul>
        </div>
    @endif
    <form action="{{route('cars.store')}}" method="post">
        @csrf
        @method('POST')
        <label for="marca">Marca</label>
    <input type="text" name="marca" placeholder="Marca" id="marca" value="{{old('marca')}}">
        <label for="modello">Modello</label>
        <input type="text" name="modello" placeholder="Modello" id="modello" value="{{old('modello')}}">
        <label for="targa">Targa</label>
        <input type="text" name="targa" placeholder="Targa" id="targa" value="{{old('targa')}}">
        <label for="prezzo">Prezzo</label>
        <input type="number" name="prezzo" placeholder="Prezzo" id="prezzo" value="{{old('prezzo')}}">
        <input type="submit" value="Invia">
    </form>  
@endsection