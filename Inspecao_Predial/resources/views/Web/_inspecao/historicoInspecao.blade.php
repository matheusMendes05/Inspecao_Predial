@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-">


        <h1 class="display-4 text-muted border-bottom">
            Historico de Inspeções.
        </h1>


        <div class="row">
            <div class="col-6 ">
                <p>Historico de Inspeções realizadas no Edificio:
                    <span class="text-success">

                        @if(!isset($inspecao[0]->nome_edificio))
                        <div class="alert alert-danger">
                            Nenhuma Inspeção Realizada
                        </div>
                        @endif

                    </span>
                </p>
            </div>
            <div class="col-6 ">
                <div class="text-rigth">
                    <p class="text-right text-muted"> <a href="{{route('edificio.show',[ 'id' => $edificio_id])}}"><button class="btn btn-success">Voltar</button></a></p>
                </div>
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


    <div class="my-4">

        <!-- List all building-->


        <table class="table table-responsive-md table-bordered table-sm">
            <thead>
                <tr class="bg-success text-white">
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Responsável pelo Edificio</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data De Inspecão</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inspecao as $insp)
                <tr>
                    <td>{{$insp->responsavel_edificio}}</td>
                    <td>{{$insp->responsavel_telefone}}</td>
                    <td>{{$insp->responsavel_email}}</td>
                    <td>{{$insp->data}}</td>
                    <td>

                        <a href="{{route('inspecao.index',['id'=> $insp->edificio_id, 'inspecao_id' => $insp->id])}}">
                            <button class="btn btn-outline-success btn-sm">Ver inpeção <i class="fa fa-eye" aria-hidden="true"></i></button>
                        </a>

                        <form action="{{ route('inspecao.destroy', ['inspecao_id' => $insp->id])}}" class="d-inline" method="post">
                            @CSRF
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Excluir <i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>



@endsection