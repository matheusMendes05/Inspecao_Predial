@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom">
            Historico de Inspeções.
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


    <div class="my-4 border">

        <!-- List all building-->

        @if(!empty($inspecao))
        <table class="table table-responsive-md table-bordered table-sm">
            <thead>
                <tr class="bg-success text-white">
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Edificio</th>
                    <th scope="col">Localização</th>
                    <th scope="col">Pavimentos</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Data Contrução</th>
                    <th scope="col" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inspecao as $insp)
                <tr>
                    <td>{{$insp->nome_edificio}}</td>
                    <td><a href="">{{$insp->endereco}}</a></td>
                    <td>{{$insp->n_pavimentos}}</td>
                    <td>{{$insp->tipologia}}</td>
                    <td>{{$insp->ano_construcao}}</td>

                    <td class="text-center">
                        <!--rota verificar identificacao -->
                        <a href="{{route('inspection.show', ['id' => $insp->id])}}"><button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button></a>


                        <!--rota de editar identificacao  -->
                        <a href=""><button class="btn btn-dark btn-sm acao"><i class="fas fa-edit acao"></i></button></a>


                        <!--rota de exclusao de identificacao  -->
                        <form action="{{ route('inspection.delete', ['id' =>$insp->id ])}}" class="d-inline" method="post">
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