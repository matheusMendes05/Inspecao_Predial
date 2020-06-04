@extends('layouts.dashboard')

@section('content')

@if($errors->all())
@foreach($errors->all() as $error)
<div class="alert alert-success">
    {{$error}}
</div>
@endforeach
@endif

<div class="container">

    <div class="border-bottom">
        <h1 class="display-4 text-muted">Dados Coletados</h1>
    </div>

    <div class="bg-success text-white">
        <h1 class="text-center">Estruturas</h1>
    </div>
    <div class="row">

        @foreach($estruturas as $estrutura)
        <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
            <div class="card mb-3">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <img class="card-img-top" src="{{ env('APP_URL').$estrutura->foto}}" alt="" width="400">
                <div class="card-body">
                    <h6 class="card-title border-bottom">{{$estrutura->elemento_formulario}}</h6>
                    <p class="card-text">Local: </h4> {{$estrutura->local}}</p>
                    <p class="card-text">Observações: {{$estrutura->obs}}</p>
                    <a name="" id="" class="btn btn-primary my-2" href="{{route('teste.relatorio', ['elemento_id' => $estrutura->id])}}" role="button">Classificaçã</a>
                    <a name="" id="" class="btn btn-success my-2" href="" role="button">Classificaçã</a>
                    <a name="" id="" class="btn btn-danger my-2" href="" role="button">Criticidade</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>





</div>


@endsection