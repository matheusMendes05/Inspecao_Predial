@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom">
            Historico de Edificio.
        </h1>
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

    <div class="my-4 text-left">
        <h5 class="text-muted">Novo Edificio
            <a href="{{route('duilding.create')}}"><button class="btn btn-outline-success">novo</button></a>
        </h5>
    </div>

    <div class="my-4 border">

        <!-- List all building-->

        @if(!empty($edificio))
        <table class="table table-responsive-md table-bordered table-sm">
            <thead>
                <tr class="bg-success text-white">
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Edificio</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Data de Inspeção</th>
                    <th scope="col">Engenheiro responsável</th>
                    <th scope="col">status</th>
                    <th scope="col" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($edificio as $edif)
                <tr>
                    <td><a href="{{route('inspection.index', ['id'=> $edif->id])}}" class="text-wrap">{{$edif->nome_edificio}}</a></td>

                    <!-- Localizacao ID -->
                    <td>{{$edif->endereco}}</td>
                    <td>{{$edif->cnpj}}</td>
                    <td>{{$edif->data}}</td>
                    <td>{{$edif->nome_responsavel}}</td>
                    <td>
                        <p class="text-danger">Aguardando</p>
                    </td>

                    <td class="text-center">
                        <!--rota verificar identificacao -->
                        <a href=""><button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button></a>


                        <!--rota de editar identificacao  -->
                        <a href=""><button class="btn btn-dark btn-sm acao"><i class="fas fa-edit acao"></i></button></a>


                        <!--rota de exclusao de identificacao  -->
                        <form action="{{route('duilding.delete', ['id' => $edif->id])}}" class="d-inline" method="post">
                            @CSRF
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        @endif

    </div>
</div>


@endsection