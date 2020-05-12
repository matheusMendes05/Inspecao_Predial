@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div>
        <h1 class="display-4 text-muted border-bottom">
            Inspecionar Edificio.
        </h1>
        <div class="row my-4">
            <div class="col-6">
                <p>Edificio: <Strong>{{$edificio->nome_edificio}}</Strong></p>
            </div>
            <div class="col-6">
                <p class="justify-aling-rigth">Inspecoes Realizadas: 10</p>
            </div>
        </div>
    </div>

    @if(isset($message))
    <div class="alert alert-success">
        <p class="text-white">{{$message}}</p>
    </div>
    @endif

    @if($errors->all())
    @foreach($errors->all() as $error)
    <div class="alert alert-success">
        {{$error}}
    </div>
    @endforeach
    @endif





    @endsection