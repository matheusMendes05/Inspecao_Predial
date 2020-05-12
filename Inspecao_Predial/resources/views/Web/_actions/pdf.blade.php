<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<body>



    <div class="border-bottom">
        <h1 class="text-muted display-4">Inspeção Predial</h1>
    </div>

    {{$collect['inspecao']->id}}


    <!-- Edificio -->
    <div class="container-fluid">
        @if(isset($collect['inspecao']))
        <div class="text-left my-2">
            <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-Edificio" aria-expanded="true" aria-controls="form-Edificio">Edificio.</button>
        </div>


        <div class="collapse navbar-collapse mb-4 show" id="form-Edificio">
            <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                <div class="row bg-light">
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Engenheiro Responsavel </h4> {{$collect['inspecao']['nome_responsavel']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Data de Inspeção: </h4> {{$collect['inspecao']['data']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Nome Edificio: </h4> {{$collect['inspecao']['nome_edificio']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Endereço: </h4> {{$collect['inspecao']['endereco']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Bairro: </h4> {{$collect['inspecao']['bairro']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Complemento: </h4> {{$collect['inspecao']['complemento']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">CEP: </h4> {{$collect['inspecao']['cep']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">CNPJ: </h4> {{$collect['inspecao']['cnpj']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Tipologia: </h4> {{$collect['inspecao']['tipologia']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Outros: </h4> {{$collect['inspecao']['outros']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Numero de Pavimentos: </h4> {{$collect['inspecao']['n_pavimentos']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Ano Construcao: </h4> {{$collect['inspecao']['ano_construcao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Construtora: </h4> {{$collect['inspecao']['construtora']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Administrador: </h4> {{$collect['inspecao']['administrador']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Responsavel pelo acompanhamento da obra: </h4> {{$collect['inspecao']['responsavel_acompanhamento_obra']}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        @endif
    </div>


    <!-- Edificio -->
    <div class="container-fluid">
        @if(isset($collect['estruturas']))
        <div class="text-left my-2">
            <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-estruturas" aria-expanded="true" aria-controls="form-estruturas">Estruturas.</button>
        </div>


        <div class="collapse navbar-collapse mb-4 show" id="form-estruturas">
            <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                <div class="row bg-light">
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local fissuras </h4> {{$collect['estruturas']['local_fissuras']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto fissuras: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_fissuras']}}" alt="" width="250">
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs fissuras: </h4> {{$collect['estruturas']['obs_fissuras']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local destacamento_DD: </h4> {{$collect['estruturas']['local_destacamento_DD']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto destacamento DD: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_destacamento_DD']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs destacamento DD: </h4> {{$collect['estruturas']['obs_destacamento_DD']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local armadura exposta: </h4> {{$collect['estruturas']['local_armadura_exposta']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto armadura exposta: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_armadura_exposta']}}" alt="" width="250">
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs armadura exposta: </h4> {{$collect['estruturas']['obs_armadura_exposta']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local corrosao: </h4> {{$collect['estruturas']['local_corrosao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto corrosao: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_corrosao']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs corrosao: </h4> {{$collect['estruturas']['obs_corrosao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local peca estrutural deformacao excessiva: </h4> {{$collect['estruturas']['local_peca_estrutural_deformacao_excessiva']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto peca estrutural deformacao excessiva: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_peca_estrutural_deformacao_excessiva']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs peca estrutural deformacao excessiva: </h4> {{$collect['estruturas']['obs_peca_estrutural_deformacao_excessiva']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local irregularidades geometricas: </h4> {{$collect['estruturas']['local_irregularidades_geometricas']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto irregularidades geometricas: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_irregularidades_geometricas']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs irregularidades geometricas: </h4> {{$collect['estruturas']['obs_irregularidades_geometricas']}}

                        </p>
                    </div>



                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local eflorescencia lixiviacaoo infiltracao: </h4> {{$collect['estruturas']['local_eflorescencia_lixiviacaoo_infiltracao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto eflorescencia lixiviacaoo infiltracao: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_eflorescencia_lixiviacaoo_infiltracao']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs eflorescencia lixiviacaoo infiltracao: </h4> {{$collect['estruturas']['obs_eflorescencia_lixiviacaoo_infiltracao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local outros: </h4> {{$collect['estruturas']['local_outros']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto outros: </h4>
                            <img src="{{ env('APP_URL').$collect['estruturas']['foto_outros']}}" alt="" width="250">
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs outros: </h4> {{$collect['estruturas']['obs_outros']}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Edificio -->
    <div class="container-fluid">
        @if(isset($collect['fundacao']))
        <div class="text-left my-2">
            <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-fundacao" aria-expanded="true" aria-controls="form-fundacao">Fundação.</button>
        </div>


        <div class="collapse navbar-collapse mb-4 show" id="form-fundacao">
            <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                <div class="row bg-light">
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local erosao solo </h4> {{$collect['fundacao']['local_erosao_solo']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto erosao solo: </h4>
                            <img src="{{ env('APP_URL').$collect['fundacao']['foto_erosao_solo']}}" alt="" width="250">
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs erosao solo: </h4> {{$collect['fundacao']['obs_erosao_solo']}}
                        </p>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local recalque diferencial: </h4> {{$collect['fundacao']['local_recalque_diferencial']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto recalque diferencial: </h4>
                            <img src="{{ env('APP_URL').$collect['fundacao']['foto_recalque_diferencial']}}" alt="" width="250">
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs recalque diferencial: </h4> {{$collect['fundacao']['obs_recalque_diferencial']}}
                        </p>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local outro: </h4> {{$collect['fundacao']['local_outro']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto outro: </h4>
                            <img src="{{ env('APP_URL').$collect['fundacao']['foto_outro']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs outro: </h4> {{$collect['fundacao']['obs_outro']}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        @endif
    </div>



    <!-- Edificio -->
    <div class="container-fluid">
        @if(isset($collect['vedacao']))
        <div class="text-left my-2">
            <button type="button" class="btn bg-success text-white btn-lg btn-block" data-toggle="collapse" data-target="#form-vedacao" aria-expanded="true" aria-controls="form-vedacao">Vedação.</button>
        </div>


        <div class="collapse navbar-collapse mb-4 show" id="form-vedacao">
            <div class="collapse navbar-collapse mb-4 show" id="form-notaO">
                <div class="row bg-light">
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local fissura trinca </h4> {{$collect['vedacao']['local_fissura_trinca']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto fissura_trinca: </h4>
                            <img src="{{ env('APP_URL').$collect['vedacao']['foto_fissura_trinca']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs fissura_trinca: </h4> {{$collect['vedacao']['obs_fissura_trinca']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local eflorescencia: </h4> {{$collect['vedacao']['local_eflorescencia']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto eflorescencia: </h4>
                            <img src="{{ env('APP_URL').$collect['vedacao']['foto_eflorescencia']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs eflorescencia: </h4> {{$collect['vedacao']['obs_eflorescencia']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">local infiltracao: </h4> {{$collect['vedacao']['local_infiltracao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">foto infiltracao: </h4>
                            <img src="{{ env('APP_URL').$collect['vedacao']['foto_infiltracao']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">obs infiltracao: </h4> {{$collect['vedacao']['obs_infiltracao']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Local Irregularidades Geometricas: </h4> {{$collect['vedacao']['local_irregularidades_geometricas']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Foto Irregularidades Geometricas: </h4>
                            <img src="{{ env('APP_URL').$collect['vedacao']['foto_irregularidades_geometricas']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Observacões Irregularidades Geometricas: </h4> {{$collect['vedacao']['obs_irregularidades_geometricas']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Local Outro: </h4> {{$collect['vedacao']['local_outro']}}
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Fotos Outro: </h4>
                            <img src="{{ env('APP_URL').$collect['vedacao']['foto_outro']}}" alt="" width="250">

                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 border border-white rounded">
                        <p class="">
                            <h4 class="text-secondary d-inline">Pbservação Outro: </h4> {{$collect['vedacao']['obs_outro']}}
                        </p>
                    </div>


                </div>
            </div>
        </div>
        @endif
    </div>





</body>

</html>