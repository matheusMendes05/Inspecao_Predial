@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12 " id="box-form">
        <div class="container-fluid screan" id="container-fluid">
            <div class="tela">
                <!-- inicio formulario check-box -->
                <form action="{{ route('inspecao.store', ['id' => $edificio->id])}}" method="post" enctype="multipart/form-data">
                    @CSRF
                    <div id="tela-Formulario">
                        @if($errors->all())
                        @foreach($errors->all() as $erros)
                        <div class="alert alert-danger">
                            {{$errors}}
                        </div>
                        @endforeach
                        @endif
                        <h1 class="display-4 ">Construa seu Formulario.</h1>

                        <p class="text-muted border-bottom">
                            Selecione os Campos que serão inspecionado no Edificio:
                            <span class="text-primary">
                                {{ $edificio->nome_edificio }}
                            </span>
                        </p>

                        <div class="screan-formulario">

                            <!-- <fieldset>
                                <legend class="text-white bg-success col-md-8 col-sm-12">check-list de inspeção predial</legend>
                                <div class="form-check pretty p-switch">
                                    <input class="form-check-input elemento" type="checkbox" value="identificacao" id="identificacao" checked name="identificacao">
                                    <div class="state p-success">
                                        <label class="form-check-label font-weight-bold text-muted " for="defaultCheck1">
                                            Identificação.
                                        </label>
                                    </div>
                                </div>
                                <br> -->
                            <!-- Localizacao da Inspeçao -->
                            <!-- <div class="form-check pretty p-switch" hidden>
                                    <input class="form-check-input elemento" type="checkbox" value="localizacao" id="localizacao" checked name="localizacao">
                                    <div class="state p-success">
                                        <label class="form-check-label font-weight-bold text-muted " for="defaultCheck1">
                                            Localização.
                                        </label>
                                    </div>
                                </div>

                            </fieldset> -->

                            <fieldset>
                                <legend class="text-white bg-success col-md-8 col-sm-12">Topicos de Inpeção de Campo</legend>


                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="estruturas" id="estruturas" name="estruturas">
                                    <div class="state p-success">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Estruturas.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="fundacao" id="fundacao" name="fundacao">
                                    <div class="state p-success">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Fundação.
                                        </label>
                                    </div>
                                </div>

                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="vedacao" id="vedacao" name="vedacao">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Vedação.
                                        </label>
                                    </div>
                                </div>

                                <!-- 
                                <div class="form-check pretty p-switch">
                                    <input class="form-check-input elemento" type="checkbox" value="aparelhosApoio" id="aparelhosApoio" name="aparelhosApoio">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Revestimento.
                                        </label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-check pretty p-switch">
                                    <input class="form-check-input elemento" type="checkbox" value="pilares" id="pilares" name="pilares">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Parede.
                                        </label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-check pretty p-switch">
                                    <input class="form-check-input elemento" type="checkbox" value="fundacoes" id="fundacoes" name="fundacoes">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Piso.
                                        </label>
                                    </div>
                                </div>
                                <br> -->

                            </fieldset>

                            <fieldset>
                                <legend class="text-white bg-success col-md-8 col-sm-12 ">Revestimentos.</legend>
                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="forro" id="guardaCorpo" name="forro">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Forro.
                                        </label>
                                    </div>
                                </div>



                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="parede" id="parede" name="parede">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Parede.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="piso" id="piso" name="piso">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Piso.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch  py-2">
                                    <input class="form-check-input elemento" type="checkbox" value="fachada" id="fachada" name="fachada">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Fachada.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="esquadria" id="esquadria" name="esquadria">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Esquadrilha.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="impermeabilizacao" id="impermeabilizacao" name="impermeabilizacao">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Impermeabilização.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="instalacao_hidro" id="instalacao_hidro" name="instalacao_hidro">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Instalação Hidrossanitária.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="instalacao_gas" id="instalacao_gas" name="instalacao_gas">
                                    <div class="state p-success">

                                        <label class="form-check-label " for="defaultCheck1">
                                            Instalação de Gás.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="instalacao_eletrica" id="instalacao_eletrica" name="instalacao_eletrica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Instalação Elétrica.
                                        </label>
                                    </div>
                                </div>



                            </fieldset>

                            <fieldset>
                                <legend class="text-white bg-success col-md-8 col-sm-12">Mecanização</legend>
                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Elevadores.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Climatização.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch">
                                    <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            VENTILAÇÃO E EXAUSTÃO MECÂNICA.
                                        </label>
                                    </div>
                                </div>



                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Motor Elétrico.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Bomba Hidráulica.
                                        </label>
                                    </div>
                                </div>


                            </fieldset>
                        </div>

                        <fieldset>
                            <legend class="text-white bg-success col-md-8 col-sm-12">Cobertura</legend>
                            <div class="form-check pretty p-switch   py-1">
                                <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                                <div class="state p-success">

                                    <label class="form-check-label" for="defaultCheck1">
                                        Cobertura.
                                    </label>
                                </div>
                            </div>




                        </fieldset>
                    </div>

                    <fieldset>
                        <legend class="text-white bg-success col-md-8 col-sm-12">Combate A Incêndio</legend>
                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Extintores.
                                </label>
                            </div>
                        </div>


                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Hidrantes.
                                </label>
                            </div>
                        </div>


                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Saida de Emergência.
                                </label>
                            </div>
                        </div>


                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Chuveiros Automáticos.
                                </label>
                            </div>
                        </div>



                    </fieldset>

                    <fieldset>
                        <legend class="text-white bg-success col-md-8 col-sm-12">SPDA</legend>
                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    SPDA.
                                </label>
                            </div>
                        </div>



                    </fieldset>

                    <fieldset>
                        <legend class="text-white bg-success col-md-8 col-sm-12">Área de lazer</legend>
                        <div class="form-check pretty p-switch   py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Piscina.
                                </label>
                            </div>
                        </div>


                        <div class="form-check pretty p-switch    py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    PLAYGROUND.
                                </label>
                            </div>
                        </div>


                        <div class="form-check pretty p-switch  py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    Quadra Esportiva.
                                </label>
                            </div>
                        </div>

                        <div class="form-check pretty p-switch  py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    BRINQUEDOTECA E SALÃO DE JOGOS.
                                </label>
                            </div>
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend class="text-white bg-success col-md-8 col-sm-12">AVALIAÇÃO DA MANUTENÇÃO</legend>
                        <div class="form-check pretty p-switch  py-1">
                            <input class="form-check-input elemento" type="checkbox" value="documentacaoFotografica" id="notaObra" name="documentacaoFotografica">
                            <div class="state p-success">

                                <label class="form-check-label" for="defaultCheck1">
                                    AVALIAÇÃO DA MANUTENÇÃO.
                                </label>
                            </div>
                        </div>




                    </fieldset>
            </div>


            <div class="text-right">
                <input type="submit" class="btn btn-success  btn-lg my-5" value="Preencher Formulario">
            </div>

            <!-- <div class="text-right">
                            <button class="btn btn-success  btn-lg my-5" id="btn-form" onclick="checkedBox()">Visualizar Formulario.</button>
                        </div> -->

        </div>

        <div class="text-center" id="buttom-content">

        </div>

        </form>
    </div>
</div>
</div>
</div>
<!-- fim formulario check-box -->





@endsection