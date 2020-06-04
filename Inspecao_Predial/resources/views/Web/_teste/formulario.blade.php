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
    <h1 class="text-center">Check-list Predial</h1>
</div>

<form action="{{route('teste.store')}}" method="POST" enctype="multipart/form-data">
    @CSRF

    <div class="container">
        <div class="border p-4 bg-light ">
            <div id="componente">
                <div class="row">
                    <div class="col-6">
                        <label for="componente">Sistema à ser Inspecionado</label>
                        <div class="input-group">
                            <select class="custom-select" id="descValue" name="txt_sistema_edificio">
                                <option selected value="Estruturas">Estruturas</option>
                                <option value="Fundacao">Fundacao</option>
                                <option value="Vedacao">Vedação</option>
                                <option value="Forro">Forro</option>
                                <option value="Parede">Parede</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" onclick="teste()">Selecionar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="componente">Elemento do Sistema</label>
                            <div id="content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="formulario">
                <div class="row">
                    <div class="col-6">
                        <label for="local" class="form-text text-muted">Local</label>
                        <input type="text" name="txt_local" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="foto" class="form-text text-muted">Foto</label>
                        <input type="file" name="txt_foto" class="form-control">
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="obs" class="form-text text-muted">Observações</label>
                            <textarea class="form-control" name="txt_obs" id="" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-success btn-lg">Enviar</button>
                <a href="{{route('teste.index')}}" class="ml-2">Historico</a>

            </div>
        </div>
    </div>

</form>

<script src="{{ url(mix('Web/js/estruturas.js'))}}"></script>


@endsection