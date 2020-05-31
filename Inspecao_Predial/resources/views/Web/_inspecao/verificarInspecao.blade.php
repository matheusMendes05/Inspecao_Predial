@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom">
            Sistema de Inspeção Predial.
        </h1>
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


<div class="container">
    <div class=" my-4 p-2">

        <div class="row">
            <div class="col-12  border p-2 text-white bg-success">
                <div class="text-center">
                    <h4>Dados de Edificação</h4>
                </div>
            </div>

            <div class="col-8 border border mt-1">
                <p class="text-muted">Responsável pela Inspeção:
                    <span class="text-dark font-weight-bold">{{$inspecao['edificio']->responsavel_inspecao}}</span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Data:
                    <span class="text-dark font-weight-bold">{{$inspecao['edificio']->data}}</span>
                </p>

            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">Nome do edifício:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->nome_edificio}}
                    </span>
                </p>

            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Endereço:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->endereco}}
                    </span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Bairro:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->bairro}}
                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Complemento:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->complemento}}
                    </span>
                </p>

            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">CEP:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->cep}}
                    </span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">CNPJ:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->cnpj}}
                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Responsável pela Edificação:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->responsavel_edificio}}

                    </span>
                </p>

            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Telefone:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->responsavel_telefone}}

                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Email:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->responsavel_email}}

                    </span>
                </p>
            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">TIPOLOGIA:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->tipologia}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Nº de pavimentos:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->n_pavimentos}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Ano de Construção:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->ano_construcao}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Construtora:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->construtora}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">
                    Administrador:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->administrador}}
                    </span>
                </p>
            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">
                    Responsável Pelo Acompanhamento da Obra:
                    <span class="text-dark font-weight-bold">
                        {{$inspecao['edificio']->responsavel_acompanhamento_obra}}
                    </span>
                </p>
            </div>

            <div class="col-12  border p-2 ">
                <div class="text-center text-white bg-success">
                    <h4>Dados de Inspeção</h4>
                </div>

                @if(isset($inspecao['estruturas']))
                <!-- Edificio -->
                <div class="container-fluid">
                    <div class="text-left my-2">
                        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-estruturas" aria-expanded="true" aria-controls="form-estruturas">Estruturas.</button>
                    </div>


                    <div class="collapse navbar-collapse mb-4 show" id="form-estruturas">
                        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                            <div class="row bg-light">

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_fissuras }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Fissuras</h5>
                                            <p class="card-text">Local Fissura: </h4> {{$inspecao['estruturas']->local_fissuras}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_fissuras}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_destacamento_DD }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">foto destacamento DD</h5>
                                            <p class="card-text">Local destacamento DD: </h4> {{$inspecao['estruturas']->local_destacamento_DD}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_destacamento_DD}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_armadura_exposta }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">foto destacamento DD</h5>
                                            <p class="card-text">Local destacamento DD: </h4> {{$inspecao['estruturas']->local_armadura_exposta}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_armadura_exposta}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_corrosao }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Local Corrosão </h5>
                                            <p class="card-text">Local destacamento DD: </h4> {{$inspecao['estruturas']->local_corrosao}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_corrosao}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_peca_estrutural_deformacao_excessiva }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Peca estrutural deformacao excessiva</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['estruturas']->local_peca_estrutural_deformacao_excessiva}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_peca_estrutural_deformacao_excessiva}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_irregularidades_geometricas }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Irregularidades geometricas</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['estruturas']->local_irregularidades_geometricas}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_irregularidades_geometricas}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_eflorescencia_lixiviacaoo_infiltracao }}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Eflorescencia lixiviacaoo infiltracao</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['estruturas']->local_eflorescencia_lixiviacaoo_infiltracao}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_eflorescencia_lixiviacaoo_infiltracao}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['estruturas']->foto_outros}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Outros: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['estruturas']->local_outros}}</p>
                                            <p class="card-text">Observações: {{$inspecao['estruturas']->obs_outros}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endif


            </div>

            <!-- Edificio -->
            <div class="container-fluid">
                @if(isset($inspecao['fundacao']))
                <div class="text-left my-2">
                    <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-fundacao" aria-expanded="true" aria-controls="form-fundacao">Fundação.</button>
                </div>


                <div class="collapse navbar-collapse mb-4 show" id="form-fundacao">
                    <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                        <div class="row bg-light">


                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fundacao']->foto_erosao_solo}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Erosão Solo </h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['fundacao']->local_erosao_solo}}</p>
                                        <p class="card-text">Observações: {{$inspecao['fundacao']->obs_erosao_solo}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fundacao']->foto_recalque_diferencial}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Recalque diferencial </h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['fundacao']->local_recalque_diferencial}}</p>
                                        <p class="card-text">Observações: {{$inspecao['fundacao']->obs_recalque_diferencial}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fundacao']->foto_outro}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Outro </h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['fundacao']->local_outro}}</p>
                                        <p class="card-text">Observações: {{$inspecao['fundacao']->obs_outro}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- vedacao -->
            <div class="container-fluid">
                @if(isset($inspecao['vedacao']))
                <div class="text-left my-2">
                    <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-vedacao" aria-expanded="true" aria-controls="form-vedacao">Vedação.</button>
                </div>

                <div class="collapse navbar-collapse mb-4 show" id="form-vedacao">
                    <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                        <div class="row bg-light">

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['vedacao']->foto_fissura_trinca}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Fissura trinca </h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['vedacao']->local_fissura_trinca}}</p>
                                        <p class="card-text">Observações: {{$inspecao['vedacao']->obs_fissura_trinca}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['vedacao']->foto_eflorescencia}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Eflorescencia </h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['vedacao']->local_eflorescencia}}</p>
                                        <p class="card-text">Observações: {{$inspecao['vedacao']->obs_eflorescencia}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['vedacao']->foto_infiltracao}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Infiltração</h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['vedacao']->local_infiltracao}}</p>
                                        <p class="card-text">Observações: {{$inspecao['vedacao']->obs_infiltracao}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['vedacao']->foto_irregularidades_geometricas}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Irregularidades Geometricas</h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['vedacao']->local_irregularidades_geometricas}}</p>
                                        <p class="card-text">Observações: {{$inspecao['vedacao']->obs_irregularidades_geometricas}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                    <img class="card-img-top" src="{{ env('APP_URL').$inspecao['vedacao']->foto_outro}}" alt="" width="400">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Outro</h5>
                                        <p class="card-text">Local: </h4> {{$inspecao['vedacao']->local_outro}}</p>
                                        <p class="card-text">Observações: {{$inspecao['vedacao']->obs_outro}}</p>
                                        <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endif

                <!-- forro -->
                <div class="container-fluid">
                    @if(isset($inspecao['forro']))
                    <div class="text-left my-2">
                        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-forro" aria-expanded="true" aria-controls="form-forro">Forro.</button>
                    </div>


                    <div class="collapse navbar-collapse mb-4 show" id="form-fundacao">
                        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                            <div class="row bg-light">


                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_deformacao_excessiva}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Deformação excessiva </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_deformacao_excessiva}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_deformacao_excessiva}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_fissura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Fissura</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_fissura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_fissura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_desencaixe}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Desencaixe</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_desencaixe}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_desencaixe}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_ultilizacao}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Utilização de material sujeito a corrosão </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_ultilizacao}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_ultilizacao}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_deficiencia}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Deficiência no dimensionamento ou inexistência de alçapões </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_deficiencia}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_deficiencia}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['forro']->foto_outros}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">outros </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['forro']->local_outros}}</p>
                                            <p class="card-text">Observações: {{$inspecao['forro']->obs_outros}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Parede -->
                <div class="container-fluid">
                    @if(isset($inspecao['parede']))
                    <div class="text-left my-2">
                        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-parede" aria-expanded="true" aria-controls="form-parede">Parede.</button>
                    </div>


                    <div class="collapse navbar-collapse mb-4 show" id="form-parede">
                        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                            <div class="row bg-light">

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_fissura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Fissura </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_fissura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_fissura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_destacamento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Destacamento / desagregação / descolamento</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_destacamento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_destacamento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_infiltracao}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Infiltração</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_infiltracao}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_infiltracao}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_eflorecencia}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Eflorescência / manchas de mofo / bolor </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_eflorecencia}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_eflorecencia}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_deficiencia}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Falta ou deficiência nas juntas de trabalho e rejunte </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_deficiencia}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_deficiencia}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_bolhas}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Descascamento / bolhas / enrugamento </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_bolhas}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_bolhas}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_falha}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Falha rejunte </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_falha}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_falha}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_abertura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Abertura improvisada para passagem de cabos </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_abertura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_abertura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_som}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Som cavo </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_som}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_som}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['parede']->foto_outro}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Outro </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['parede']->local_outro}}</p>
                                            <p class="card-text">Observações: {{$inspecao['parede']->obs_outro}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>


                <!-- Piso -->
                <div class="container-fluid">
                    @if(isset($inspecao['piso']))
                    <div class="text-left my-2">
                        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-piso" aria-expanded="true" aria-controls="form-piso">piso.</button>
                    </div>


                    <div class="collapse navbar-collapse mb-4 show" id="form-piso">
                        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                            <div class="row bg-light">

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_fissura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Fissura </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_fissura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_fissura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_deficiencia_juntas}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Falta ou deficiência nas juntas de trabalho e rejunte</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_deficiencia_juntas}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_deficiencia_juntas}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_destacamento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Destacamento / descolamento</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_destacamento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_destacamento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_caimento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Caimento inadequado nas áreas molháveis ou laváveis </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_caimento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_caimento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_escadas_sem_protecao}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Escadas sem proteção antiderrapante e pisos externos escorregadios</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_escadas_sem_protecao}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_escadas_sem_protecao}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_manchas}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Manchas decorrentes de umidade ascendente do solo / Eflorescência </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_manchas}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_manchas}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_abatimento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Abatimento do piso </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_abatimento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_abatimanto}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_som}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Som cavo </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_som}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_som}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['piso']->foto_outros}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Outro: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['piso']->local_outros}}</p>
                                            <p class="card-text">Observações: {{$inspecao['piso']->obs_outros}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>


                <!-- Piso -->
                <div class="container-fluid">

                    @if(isset($inspecao['fachada']))
                    <div class="text-left my-2">
                        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-fachada" aria-expanded="true" aria-controls="form-fachada">fachada.</button>
                    </div>

                    <div class="collapse navbar-collapse mb-4 show" id="form-fachada">
                        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                            <div class="row bg-light">

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_fissura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Fissura </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_fissura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_fissura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_destacamento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Destacamento / desagregação / descolamento</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_destacamento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_destacamento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_descascamento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Descascamento / bolhas / enrugamento</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_descascamento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_descascamento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_eflorecencia}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Eflorescência / manchas de mofo / bolor </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_eflorecencia}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_eflorecencia}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_falta_deficiencia}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Falta ou deficiência nas juntas de trabalho e rejunte</h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_falta_deficiencia}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_falta_deficiencia}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_falta_pintura}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Deficiência na pintura, oxidação e corrosão das esquadrias </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_falta_pintura}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_falta_pintura}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_desgaste}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Desgaste (fissuras, escurecimentos, perda de cor) das esquadrias </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_desgaste}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_desgaste}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_praga}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Ataque de pragas nas esquadrias </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_praga}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_praga}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_vidros}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Vidros soltos ou quebrados: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_vidros}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_vidros}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_rompimento}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Rompimento ou descolamento do material selante: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_rompimento}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_rompimento}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_caixa}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Caixa de ar condicionado danificada: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_caixa}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_caixa}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                        <img class="card-img-top" src="{{ env('APP_URL').$inspecao['fachada']->foto_outro}}" alt="" width="400">
                                        <div class="card-body">
                                            <h5 class="card-title border-bottom">Outro: </h5>
                                            <p class="card-text">Local: </h4> {{$inspecao['fachada']->local_outro}}</p>
                                            <p class="card-text">Observações: {{$inspecao['fachada']->obs_outro}}</p>
                                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>


            </div>




            @endsection