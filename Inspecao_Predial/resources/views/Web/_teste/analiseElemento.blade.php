@extends('layouts.dashboard')

@section('content')

@if($errors->all())
@foreach($errors->all() as $error)
<div class="alert alert-success">
    {{$error}}
</div>
@endforeach
@endif

<div class="bg-success text-white">
    <h1 class="text-center">Relatório</h1>
</div>

<form action="" method="POST" enctype="multipart/form-data">
    @CSRF

    <div class="container">

        <div class="row">

            <div class="col-12">
                <label for="" class="form-text">Conformidade</label>
                <input type="text" name="txt_conformidade" id="" class="form-control">
            </div>

            <div class="col-8 my-4 border p-2">
                <div class="text-center">
                    <img class="align-self-center" src="{{ env('APP_URL').$elemento->foto}}" alt="" width="400">
                </div>
            </div>

            <div class="col-4 my-4">
                <div>
                    <label for="" class="form-text">SISTEMA</label>
                    <input type="text" value="{{$elemento->sistema_edificio}}" class="form-control" readonly>
                </div>
                <div>
                    <div class="form-group">
                        <label for="" class="form-text">RECOMENDAÇÕES TÉCNICAS</label>
                        <textarea class="form-control" name="txt_recomendacoes_tecnica" id="" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="form-group">
                    <label for="" class="form-text">Classificação</label>
                    <select class="form-control" name="" id="">
                        <option>Anomalia</option>
                        <option>Falha</option>
                    </select>
                </div>
            </div>

            <div class="col-4 my-4">
                <div class="form-group">
                    <label for="" class="form-text">Tipo de Anomalia</label>
                    <select class="form-control" name="" id="">
                        <option>Exógena</option>
                        <option>Endógena</option>
                        <option>Natura</option>
                        <option>Funcional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-text">Tipo de Falha</label>
                    <select class="form-control" name="" id="">
                        <option>Planejamento</option>
                        <option>Execução</option>
                        <option>Operacional</option>
                        <option>Gerencia</option>
                    </select>
                </div>
            </div>

            <div class="col-4 my-4">
                <div class="form-group">
                    <label for="" class="form-text">Criticidade</label>
                    <select class="form-control" name="" id="">
                        <option>CRITICO</option>
                        <option>MÉDIO</option>
                        <option>MINIMO</option>
                    </select>
                </div>

            </div>

        </div>
    </div>

    <div class="text-center my-4">
        <button type="button" class="btn btn-outline-success btn-lg">
            Enviar
        </button>
    </div>


</form>



@endsection