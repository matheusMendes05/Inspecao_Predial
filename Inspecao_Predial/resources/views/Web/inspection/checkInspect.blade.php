@extends('layouts.dashboard')

@section('content')


<div class="border-bottom">
    <h1 class="text-muted display-4"> Dados de Inspeção</h1>
</div>



<!-- Edificio -->
<div class="container-fluid">
    @if(isset($collection['inspecao']))
    <div class="text-left my-2">
        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-Edificio" aria-expanded="true" aria-controls="form-Edificio">Informações Edificio.</button>
    </div>


    <div class="collapse navbar-collapse mb-4 show" id="form-Edificio">
        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
            <div class="row">

                <fieldset class="col-12 col-sm-12 col-md-12 border  rounded p-4">
                    <legend class="text-success">Dados de Inspeção</legend>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Eng. Responsavel: </span> {{$collection['inspecao']['nome_responsavel']}}
                            </p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Data de Inspeção: </span> {{$collection['inspecao']['data']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Nome da Edificação: </span> {{$collection['inspecao']['nome_edificio']}}
                            </p>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="col-12 col-sm-12 col-md-12 border  rounded my-4 p-4">
                    <legend class="text-success">Localização</legend>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Endereço: </span> {{$collection['inspecao']['endereco']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Bairro: </span> {{$collection['inspecao']['bairro']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Complemento: </span> {{$collection['inspecao']['complemento']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">CEP: </span> {{$collection['inspecao']['cep']}}
                            </p>
                        </div>
                    </div>

                </fieldset>

                <fieldset class="col-12 col-sm-12 col-md-12 border  rounded p-4">
                    <legend class="text-success">Informações Sobre o Edificio</legend>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">CNPJ:</span> {{$collection['inspecao']['cnpj']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Tipologia: </span> {{$collection['inspecao']['tipologia']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Outros:</span> {{$collection['inspecao']['outros']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Nº Pavimentos:</span> {{$collection['inspecao']['n_pavimentos']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Ano Construção Edificio:</span> {{$collection['inspecao']['ano_construcao']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Construtora:</span> {{$collection['inspecao']['construtora']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Administrador:</span> {{$collection['inspecao']['administrador']}}
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                            <p class="border rounded p-2">
                                <span class="text-dark d-inline font-weight-bold">Responsavel pelo acompanhamento da obra:</span> {{$collection['inspecao']['responsavel_acompanhamento_obra']}}
                            </p>
                        </div>
                    </div>
                </fieldset>

            </div>
        </div>
    </div>
    @endif
</div>


<!-- Edificio -->
<div class="container-fluid">
    @if(isset($collection['estruturas']))
    <div class="text-left my-2">
        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-estruturas" aria-expanded="true" aria-controls="form-estruturas">Estruturas.</button>
    </div>


    <div class="collapse navbar-collapse mb-4 show" id="form-estruturas">
        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
            <div class="row bg-light">

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_fissuras']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Fissuras</h5>
                            <p class="card-text">Local Fissura: </h4> {{$collection['estruturas']['local_fissuras']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_fissuras']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_destacamento_DD']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">foto destacamento DD</h5>
                            <p class="card-text">Local destacamento DD: </h4> {{$collection['estruturas']['local_destacamento_DD']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_destacamento_DD']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_armadura_exposta']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">foto destacamento DD</h5>
                            <p class="card-text">Local destacamento DD: </h4> {{$collection['estruturas']['local_armadura_exposta']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_armadura_exposta']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_corrosao']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Local Corrosão </h5>
                            <p class="card-text">Local destacamento DD: </h4> {{$collection['estruturas']['local_corrosao']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_corrosao']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_peca_estrutural_deformacao_excessiva']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Peca estrutural deformacao excessiva</h5>
                            <p class="card-text">Local: </h4> {{$collection['estruturas']['local_peca_estrutural_deformacao_excessiva']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_peca_estrutural_deformacao_excessiva']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_irregularidades_geometricas']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Irregularidades geometricas</h5>
                            <p class="card-text">Local: </h4> {{$collection['estruturas']['local_irregularidades_geometricas']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_irregularidades_geometricas']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_eflorescencia_lixiviacaoo_infiltracao']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Eflorescencia lixiviacaoo infiltracao</h5>
                            <p class="card-text">Local: </h4> {{$collection['estruturas']['local_eflorescencia_lixiviacaoo_infiltracao']}}</p>
                            <p class="card-text">Observações:{{$collection['estruturas']['obs_eflorescencia_lixiviacaoo_infiltracao']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['estruturas']['foto_outros']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Outros: </h5>
                            <p class="card-text">Local: </h4> {{$collection['estruturas']['local_outros']}}</p>
                            <p class="card-text">Observações: {{$collection['estruturas']['obs_outros']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
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
    @if(isset($collection['fundacao']))
    <div class="text-left my-2">
        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-fundacao" aria-expanded="true" aria-controls="form-fundacao">Fundação.</button>
    </div>


    <div class="collapse navbar-collapse mb-4 show" id="form-fundacao">
        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
            <div class="row bg-light">


                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['fundacao']['foto_erosao_solo']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Erosão Solo </h5>
                            <p class="card-text">Local: </h4> {{$collection['fundacao']['local_erosao_solo']}}</p>
                            <p class="card-text">Observações: {{$collection['fundacao']['obs_erosao_solo']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['fundacao']['foto_recalque_diferencial']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Recalque diferencial </h5>
                            <p class="card-text">Local: </h4> {{$collection['fundacao']['local_recalque_diferencial']}}</p>
                            <p class="card-text">Observações: {{$collection['fundacao']['obs_recalque_diferencial']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['fundacao']['foto_outro']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Outro </h5>
                            <p class="card-text">Local: </h4> {{$collection['fundacao']['local_outro']}}</p>
                            <p class="card-text">Observações: {{$collection['fundacao']['obs_outro']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
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
    @if(isset($collection['vedacao']))
    <div class="text-left my-2">
        <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-vedacao" aria-expanded="true" aria-controls="form-vedacao">Vedação.</button>
    </div>


    <div class="collapse navbar-collapse mb-4 show" id="form-vedacao">
        <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
            <div class="row bg-light">

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['vedacao']['foto_fissura_trinca']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Fissura trinca </h5>
                            <p class="card-text">Local: </h4> {{$collection['vedacao']['local_fissura_trinca']}}</p>
                            <p class="card-text">Observações: {{$collection['vedacao']['obs_fissura_trinca']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['vedacao']['foto_eflorescencia']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Eflorescencia </h5>
                            <p class="card-text">Local: </h4> {{$collection['vedacao']['local_eflorescencia']}}</p>
                            <p class="card-text">Observações: {{$collection['vedacao']['obs_eflorescencia']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['vedacao']['foto_infiltracao']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Infiltração</h5>
                            <p class="card-text">Local: </h4> {{$collection['vedacao']['local_infiltracao']}}</p>
                            <p class="card-text">Observações: {{$collection['vedacao']['obs_infiltracao']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['vedacao']['foto_irregularidades_geometricas']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Irregularidades Geometricas</h5>
                            <p class="card-text">Local: </h4> {{$collection['vedacao']['local_irregularidades_geometricas']}}</p>
                            <p class="card-text">Observações: {{$collection['vedacao']['obs_irregularidades_geometricas']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 border border-white rounded">
                    <div class="card mb-3">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <img class="card-img-top" src="{{ env('APP_URL').$collection['vedacao']['foto_outro']}}" alt="" width="400">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Outro</h5>
                            <p class="card-text">Local: </h4> {{$collection['vedacao']['local_outro']}}</p>
                            <p class="card-text">Observações: {{$collection['vedacao']['obs_outro']}}</p>
                            <p class="card-text"><small class="text-muted">grau de urgencia</small></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>




<div class="jumbotron">
    <h1 class="display-3">Ações</h1>
    <!-- <p class="lead">Jumbo helper text</p> -->
    <hr class="my-2">
    <p class="text-muted">Voçe pode gerar uma arquivo em formato em pdf e mandar em qualquer endereo de email!</p>
    <p class="lead">
        <a class="btn  btn-danger btn-lg" href="{{ route('pdf.show', ['id' => $collection['inspecao']->id ])}}" role="button">Gerar PDF</a>

        <a class="btn btn-primary  btn-lg" href="Jumbo action link" role="button">Email</a>
    </p>

</div>

@endsection