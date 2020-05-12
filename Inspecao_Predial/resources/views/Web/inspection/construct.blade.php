@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12 " id="box-form">
        <div class="container-fluid screan" id="container-fluid">
            <div class="tela">
                <!-- inicio formulario check-box -->
                <form action="{{route('forms.create')}}" method="post" enctype="multipart/form-data">
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

                        <p class="text-muted border-bottom">check-list de inspeção predial.</p>

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
                                    <input class="form-check-input elemento" type="checkbox" value="guardaCorpo" id="guardaCorpo" name="guardaCorpo">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Forro.
                                        </label>
                                    </div>
                                </div>



                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="barreiraVeiculos" id="barreiraVeiculos" name="barreiraVeiculos">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Parede.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch  py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="iluminacao" id="iluminacao" name="iluminacao">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Piso.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch  py-2">
                                    <input class="form-check-input elemento" type="checkbox" value="sinalizacaoViaria" id="sinalizacaoViaria" name="sinalizacaoViaria">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Fachada.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="vandalismo" id="vandalismo" name="vandalismo">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Esquadrilha.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="tubulacao" id="tubulacao" name="tubulacao">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Impermeabilização.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="trafego" id="trafego" name="trafego">
                                    <div class="state p-success">

                                        <label class="form-check-label" for="defaultCheck1">
                                            Instalação Hidrossanitária.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="estadoObra" id="estadoObra" name="estadoObra">
                                    <div class="state p-success">

                                        <label class="form-check-label " for="defaultCheck1">
                                            Instalação de Gás.
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check pretty p-switch   py-1">
                                    <input class="form-check-input elemento" type="checkbox" value="notaObra" id="notaObra" name="notaObra">
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