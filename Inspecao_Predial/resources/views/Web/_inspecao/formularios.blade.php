@extends('layouts.dashboard')

@section('content')

<form action="{{ route('inspecaoCreate.store', [ 'id' => $collection['edificio_id'] ]) }}" method="post" enctype="multipart/form-data">
    @CSRF

    <div class="container">

        <input type="hidden" name="inspecao" value="inspecao">


        <div class="mb-4">
            <h1 class="display-4 text-muted border-bottom">
                Cadastro de Inspeção.
            </h1>
        </div>

        <div class="col-12 border border mt-4 p-2">
            <label for="" class="font-weight-bold text-muted"> Responsável pelo o acompanhamento da Obra:</label>
            <p class="text-dark">
                <span class="text-dark font-weight-bold mt-4">
                    <input type="text" id="responsavelObra" class="form-control col-10" placeholder="Nome Responsável" name="responsavelObra">
                </span>
            </p>

        </div>
        <!-- Estruturas -->
        @if(isset($collection["estruturas"]) and $collection["estruturas"] == "estruturas")
        <input type="hidden" name="estruturas" value="estruturas">

        <div class="collapse navbar-collapse d-block" id="check-list">

            <div class="text-center border bg-success mt-1">
                <h1 class="text-white">Estruturas</h1>
            </div>

            <div class="form-row border rounded mt-2 mb-2">

                <div class="container">
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Estruturas </th>
                                    <th scope="col">Local</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Observação</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Fissuras</th>
                                    <td>
                                        <input type="text" id="localFissura" class="form-control" placeholder="Local" name="localFissura">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoFissura" class="form-control" name="fotoFissura">
                                    </td>
                                    <td>
                                        <input type="text" id="obsFissura" class="form-control" placeholder="Observação" name="obsFissura">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Destacamento/desagregação/desplacamento</th>
                                    <td>
                                        <input type="text" id="localDestacamento" class="form-control" placeholder="Local" name="localDestacamento">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoDestacamento" class="form-control" name="fotoDestacamento">
                                    </td>
                                    <td>
                                        <input type="text" id="obsDestacamento" class="form-control" placeholder="Observação" name="obsDestacamento">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Armadura exposta</th>
                                    <td>
                                        <input type="text" id="localArmadura" class="form-control" placeholder="Local" name="localArmadura">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoArmadura" class="form-control" name="fotoArmadura">
                                    </td>
                                    <td>
                                        <input type="text" id="obsArmadura" class="form-control" placeholder="Observação" name="obsArmadura">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Corrosão</th>
                                    <td>
                                        <input type="text" id="localCorrosao" class="form-control" placeholder="Local" name="localCorrosao">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoCorrosao" class="form-control" name="fotoCorrosao">
                                    </td>
                                    <td>
                                        <input type="text" id="obsCorrosao" class="form-control" placeholder="Observação" name="obsCorrosao">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Peça estrutural com deformação excessiva</th>
                                    <td>
                                        <input type="text" id="localPeca" class="form-control" placeholder="Local" name="localPeca">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoPeca" class="form-control" name="fotoPeca">
                                    </td>
                                    <td>
                                        <input type="text" id="obsPeca" class="form-control" placeholder="Observação" name="obsPeca">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Irregularidades geométricas, falhas de concretagem</th>
                                    <td>
                                        <input type="text" id="localIrregularidades" class="form-control" placeholder="Local" name="localIrregularidades">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoIrregularidades" class="form-control" name="fotoIrregularidades">
                                    </td>
                                    <td>
                                        <input type="text" id="obsIrregularidades" class="form-control" placeholder="Observação" name="obsIrregularidades">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Eflorescência / lixiviação / infiltração</th>
                                    <td>
                                        <input type="text" id="localEflorescencia" class="form-control" placeholder="Local" name="localEflorescencia">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoEflorescencia" class="form-control" name="fotoEflorescencia">
                                    </td>
                                    <td>
                                        <input type="text" id="obsEflorescencia" class="form-control" placeholder="Observação" name="obsEflorescencia">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Outro:</th>
                                    <td>
                                        <input type="text" id="localOutro" class="form-control" placeholder="Local" name="localOutro">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoOutro" class="form-control" name="fotoOutro">
                                    </td>
                                    <td>
                                        <input type="text" id="obsOutro" class="form-control" placeholder="Observação" name="obsOutro">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        @endif

        <!-- fim Estruturas -->

        <!-- Fundação -->
        @if (isset($collection["fundacao"]) && $collection["fundacao"] == "fundacao")
        <input type="hidden" name="fundacao" value="fundacao">

        <div class="collapse navbar-collapse d-block" id="check-list">

            <div class="text-center border bg-success mt-1">
                <h1 class="text-white">Fundação</h1>
            </div>

            <div class="form-row border rounded mt-2 mb-2">

                <div class="container">
                    <div class="table-responsive">

                        <table class="table">
                            <thead>

                                <tr>

                                    <th scope="col">Fundação </th>
                                    <th scope="col">Local</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Observação</th>

                                </tr>

                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Erosão do Solo</th>
                                    <td>
                                        <input type="text" id="localErosao" class="form-control" placeholder="Local" name="localErosao">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoErosao" class="form-control" name="fotoErosao">
                                    </td>
                                    <td>
                                        <input type="text" id="obsErosao" class="form-control" placeholder="Observação" name="obsErosao">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Recalque Diferencial</th>
                                    <td>
                                        <input type="text" id="localRecalque" class="form-control" placeholder="Local" name="localRecalque">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoRecalque" class="form-control" name="fotoRecalque">
                                    </td>
                                    <td>
                                        <input type="text" id="obsRecalque" class="form-control" placeholder="Observação" name="obsRecalque">
                                    </td>
                                </tr>

                                <th scope="row">Outro:</th>
                                <td>
                                    <input type="text" id="localOutro" class="form-control" placeholder="Local" name="localOutro">
                                </td>
                                <td>
                                    <input type="file" id="fotoOutro" class="form-control" name="fotoOutro">
                                </td>
                                <td>
                                    <input type="text" id="obsOutro" class="form-control" placeholder="Observação" name="obsOutro">
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- </form> -->

        <!-- fim Fundação -->

        <!-- Vedação -->
        @if (isset($collection["vedacao"]) && $collection["vedacao"] == "vedacao")
        <input type="hidden" name="vedacao" value="vedacao">

        <div class="collapse navbar-collapse d-block" id="check-list">

            <div class="text-center border bg-success mt-1">
                <h1 class="text-white">Vedação</h1>
            </div>

            <div class="form-row border rounded mt-2 mb-2">

                <div class="container">
                    <div class="table-responsive">

                        <table class="table">
                            <thead>

                                <tr>

                                    <th scope="col">Vedação </th>
                                    <th scope="col">Local</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Observação</th>

                                </tr>

                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Fissura/Trinca</th>
                                    <td>
                                        <input type="text" id="localFissura" class="form-control" placeholder="Local" name="localFissura">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoFissura" class="form-control" name="fotoFissura">
                                    </td>
                                    <td>
                                        <input type="text" id="obsFissura" class="form-control" placeholder="Observação" name="obsFissura">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Eflorescência</th>
                                    <td>
                                        <input type="text" id="localEflorescencia" class="form-control" placeholder="Local" name="localEflorescencia">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoEflorescencia" class="form-control" name="fotoEflorescencia">
                                    </td>
                                    <td>
                                        <input type="text" id="obsEflorescencia" class="form-control" placeholder="Observação" name="obsEflorescencia">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Infiltração</th>
                                    <td>
                                        <input type="text" id="localInfiltracao" class="form-control" placeholder="Local" name="localInfiltracao">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoInfiltracao" class="form-control" name="fotoInfiltracao">
                                    </td>
                                    <td>
                                        <input type="text" id="obsInfiltracao" class="form-control" placeholder="Observação" name="obsInfiltracao">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Irregularidades geométricas (esquadro / prumo / nível / planeza)</th>
                                    <td>
                                        <input type="text" id="localIrregularidades" class="form-control" placeholder="Local" name="localIrregularidades">
                                    </td>
                                    <td>
                                        <input type="file" id="fotoIrregularidades" class="form-control" name="fotoIrregularidades">
                                    </td>
                                    <td>
                                        <input type="text" id="obsIrregularidades" class="form-control" placeholder="Observação" name="obsIrregularidades">
                                    </td>
                                </tr>

                                <th scope="row">Outro:</th>
                                <td>
                                    <input type="text" id="localOutro" class="form-control" placeholder="Local" name="localOutro">
                                </td>
                                <td>
                                    <input type="file" id="fotoOutro" class="form-control" name="fotoOutro">
                                </td>
                                <td>
                                    <input type="text" id="obsOutro" class="form-control" placeholder="Observação" name="obsOutro">
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        @endif



        @if (isset($collection["forro"]) && $collection["forro"] == "forro")
        <input type="hidden" name="forro" value="forro">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Forro</h1>
            </div>
        </div>

        <div class="col-12">
            <div class="row border mt-2 p-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_revestimento" id="forroPvc" value="forroPvc">
                    <label class="form-check-label">PVC</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_revestimento" id="forroGesso" value="forroGesso">
                    <label class="form-check-label">Gesso</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_revestimento" id="forroMadeira" value="forroMadeira">
                    <label class="form-check-label">Madeira</label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">Outro:</label>
                    <input class="form-control" type="input" name="tipo_revestimento" id="outroForro">
                </div>

            </div>
            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deformação excessiva</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalDeformacaoForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoDeformacaoForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsDeformacaoForro" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Fissura</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFissuraForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFissuraForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFissuraForro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Desencaixe</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDesencaixeForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDesencaixeForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDesencaixeForro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Utilização de material sujeito a corrosão</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalCorrosaoForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoCorrosaoForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsCorrosaoForro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deficiência no dimensionamento ou inexistência de alçapões</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDeficienciaForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDeficienciaForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDeficienciaForro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroForro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroForro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroForro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <br />
        </div>

        @endif


        @if (isset($collection["parede"]) && $collection["parede"] == "parede")
        <input type="hidden" name="parede" value="parede">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Parede</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="row border mt-2 p-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado_parede" id="" value="Argamassado">
                    <label class="form-check-label">Argamassado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado_parede" id="" value="Pintura">
                    <label class="form-check-label">Pintura</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado_parede" id="" value="Cerâmico">
                    <label class="form-check-label">Cerâmico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estado_parede" id="" value="Gesso">
                    <label class="form-check-label">Gesso</label>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Fissura</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFissuraParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFissuraParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFissuraParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Destacamento / desagregação / descolamento</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalDestacamentoParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoDestacamentoParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsDestacamentoParede" id="" cols="30" rows="1"></textarea>
                </div>

            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Infiltração</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalInfiltracaoParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoInfiltracaoParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsInfiltracaoParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Eflorescência / manchas de mofo / bolor</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalEflorescenciaParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoEflorescenciaParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsEflorescenciaParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta ou deficiência nas juntas de trabalho e rejunte</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Descascamento / bolhas / enrugamento</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDescascamentoParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDescascamentoParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDescascamentoParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falha rejunte</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFalhaParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFalhaParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFalhaParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Abertura improvisada para passagem de cabos</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalAberturaParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoAberturaParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsAberturaParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Som cavo</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalSomParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoSomParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsSomParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroParede" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroParede" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroParede" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />


        </div>

        @endif


        @if (isset($collection["piso"]) && $collection["piso"] == "piso")
        <input type="hidden" name="piso" value="piso">


        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Piso</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="row border mt-2 p-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="pisoArgamassado" name="estado">
                    <label class="form-check-label">Argamassado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="pisoCeramico" name="estado">
                    <label class="form-check-label">Cerâmico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="pisoAlta" name="estado">
                    <label class="form-check-label">Alta Resistência</label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">Outro:</label>
                    <input class="form-control" type="input" value="outroPiso" name="estado">
                </div>

            </div>
            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Fissura</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalFissuraPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoFissuraPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsFissuraPiso" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta ou deficiência nas juntas de trabalho e rejunte</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Destacamento / descolamento</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDestacamentoPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDestacamentoPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDestacamentoPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Caimento inadequado nas áreas molháveis ou laváveis
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalCaimentoPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoCaimentoPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsCaimentoPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Escadas sem proteção antiderrapante e pisos externos
                        escorregadios</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalEscadasPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoEscadasPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsEscadasPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Manchas decorrentes de umidade ascendente do solo / Eflorescência </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalManchasPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoManchasPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsManchasPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Abatimento do piso</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalAbatimentoPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoAbatimentoPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsAbatimentoPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Som cavo</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalSomPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoSomPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsSomPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroPiso" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroPiso" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroPiso" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />
        </div>

        @endif


        @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")
        <input type="hidden" name="fachada" value="fachada">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Fachada</h1>
            </div>
        </div>

        <div class="col-12">
            <div class="row border mt-2 p-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_fachada" id="" value="Pintura">
                    <label class="form-check-label">Pintura</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_fachada" id="" value="Cerâmico">
                    <label class="form-check-label">Cerâmico</label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">Outro:</label>
                    <input class="form-control" type="input" name="tipo_fachada" id="" value="Outro">
                </div>

            </div>
            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Fissura</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalFissuraFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoFissuraFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsFissuraFachada" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Destacamento / desagregação / descolamento</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDestacamentoFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDestacamentoFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDestacamentoFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Descascamento / bolhas / enrugamento</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDescascamentoFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDescascamentoFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDescascamentoFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Eflorescência / manchas de mofo / bolor</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalEflorescenciaFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoEflorescenciaFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsEflorescenciaFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta ou deficiência nas juntas de trabalho e rejunte</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deficiência na pintura, oxidação e corrosão das esquadrias</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDeficienciaFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDeficienciaFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDeficienciaFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Desgaste (fissuras, escurecimentos, perda de cor) das esquadrias</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDesgasteFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDesgasteFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDesgasteFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Ataque de pragas nas esquadrias</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalAtaqueFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoAtaqueFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsAtaqueFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Vidros soltos ou quebrados</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalVidrosFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoVidrosFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsVidrosFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Rompimento ou descolamento do material selante</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalRompimentoFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoRompimentoFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsRompimentoFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Caixa de ar condicionado danificada</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalCaixaFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoCaixaFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsCaixaFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroFachada" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroFachada" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroFachada" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />

        </div>

        @endif

        @if (isset($collection["esquadria"]) && $collection["esquadria"] == "esquadria")
        <input type="hidden" name="esquadria" value="esquadria">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Esquadria</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="row border mt-2 p-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="esquadriaArgamassado" name="estado_esquadria">
                    <label class="form-check-label">Argamassado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="esquadriaCeramico" name="estado_esquadria">
                    <label class="form-check-label">Cerâmico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="esquadriaMadeira" name="estado_esquadria">
                    <label class="form-check-label">Madeira</label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">Outro:</label>
                    <input class="form-control" type="input" name="estado_esquadria">
                </div>

            </div>
            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deficiência na pintura, oxidação e corrosão</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalDeficienciaEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoDeficienciaEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsDeficienciaEsquadria" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Ataque de pragas</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalAtaqueEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoAtaqueEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsAtaqueEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Perda de mobilidade e/ou deficiências na abertura e
                        fechamento
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalPerdaEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoPerdaEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsPerdaEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Folga na fixação dos vidros, vidros soltos ou quebrados
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFolgaEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFolgaEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFolgaEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Rompimento ou descolamento do material selante /
                        Infiltração</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalRompimentoEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoRompimentoEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsRompimentoEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Componentes danificados
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalComponentesEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoComponentesEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsComponentesEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroEsquadria" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroEsquadria" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroEsquadria" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />
        </div>
        @endif


        @if (isset($collection["impermeabilizacao"]) && $collection["impermeabilizacao"] == "impermeabilizacao")
        <input type="hidden" name="impermeabilizacao" value="impermeabilizacao">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Impermeabilização</h1>
            </div>
        </div>
        <div class="col-12">

            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Infiltração</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalInfiltracaoImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoInfiltracaoImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsInfiltracaoImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Descolamento da manta</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDescolamentoImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDescolamentoImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDescolamentoImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Sistema de impermeabilização perfurado</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalSistemaImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoSistemaImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsSistemaImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Ressecamento e/ou craqueamento do sistema
                        impermeabilizante por falta de proteção mecânica
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalRessecamentoImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtRessecamentoImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsRessecamentoImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de junta de dilatação em proteção mecânica</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de caimento para os ralos
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalCaimentoImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoCaimentoImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsCaimentoImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de impermeabilização no teto dos reservatórios
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalTetoImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoTetoImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsTetoImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroImpermeabilizacao" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroImpermeabilizacao" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroImpermeabilizacao" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />
        </div>

        @endif

        @if (isset($collection["instalacao_hidro"]) && $collection["instalacao_hidro"] == "instalacao_hidro")

        <input type="hidden" name="instalacao_hidro" value="instalacao_hidro">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Instalação Hidrossanitária</h1>
            </div>
        </div>
        <div class="col-12">

            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Vazamento</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalVazamentoHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoVazamentoHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsVazamentoHidro" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deterioração / deformação nas tubulações</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDeterioracaoHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDeterioracaoHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDeterioracaoHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Tampas de reservatórios de água inadequadas
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalTampasHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoTampasHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsTampasHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Não conformidade na pintura das tubulações
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalPinturaHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoPinturaHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsPinturaHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de identificação nos registros do barrilete</h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>




            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Tubulações obstruídas
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalTubulacoesHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoTubulacoesHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsTubulacoesHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Entupimento / extravasamento de calhas / ralos
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalEntupimentoHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoEntupimentoHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsEntupimentoHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroHidro" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroHidro" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroHidro" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />
        </div>
        @endif


        @if (isset($collection["instalacao_gas"]) && $collection["instalacao_gas"] == "instalacao_gas")

        <input type="hidden" name="instalacao_gas" value="instalacao_gas">

        <div class="col-12 bg-success">
            <div class="text-center text-white">
                <h1>Instalação de Gás</h1>
            </div>
        </div>
        <div class="col-12">

            <div class="row border mt-2 p-2">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Vazamento</h4>
                </div>

                <div class="col-12 col-md-3">
                    <label for="">Local</label>
                    <input type="text" name="txtLocalVazamentoGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Foto</label>
                    <input type="file" name="txtFotoVazamentoGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for="">Observações</label>
                    <textarea name="txtObsVazamentoGas" id="" cols="30" rows="1"></textarea>
                </div>

            </div>


            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Deterioração / deformação nas tubulações</h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDeterioracaoGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDeterioracaoGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDeterioracaoGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Não conformidade na pintura das tubulações
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalPinturaGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoPinturaGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsPinturaGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Não conformidade nas dimensões mínimas do abrigo
                        </h4>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalDimensoesGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoDimensoesGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsDimensoesGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>



            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de abertura inferior do abrigo
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalFaltaGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoFaltaGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsFaltaGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Abertura do abrigo permitindo acesso pela via pública
                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalAberturaGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoAberturaGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsAberturaGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>

            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Falta de sinalização obrigatória

                    </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalSinalizacaoGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoSinalizacaoGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsSinalizacaoGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div>



            <div class="row border p-2 ">
                <div class="col-12 col-md-3">
                    <h6 class="mt-3 text-muted">Outro: </h6>
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="text" name="txtLocalOutroGas" id="" class="form-control" placeholder="Descricão do Local">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <input type="file" name="txtFotoOutroGas" id="" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <label for=""></label>
                    <label for="">Observações</label>
                    <textarea name="txtObsOutroGas" id="" cols="30" rows="1"></textarea>
                </div>
            </div><br />
        </div>


        @endif

        @if (isset($collection["instalacao_eletrica"]) && $collection["instalacao_eletrica"] == "instalacao_eletrica")

        <input type="hidden" name="instalacao_eletrica" value="instalacao_eletrica">

        <div class="row">

            <div class="col-12 bg-success">
                <div class="text-center text-white">
                    <h1>Instalação Elétrica</h1>
                </div>
            </div>
            <div class="col-12">

                <div class="row border mt-2 p-2">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Lâmpadas queimadas / ausência de lâmpadas</h4>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="">Local</label>
                        <input type="text" name="txtLocalLampadasEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="">Foto</label>
                        <input type="file" name="txtFotoLampadasEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="">Observações</label>
                        <textarea name="txtObsLampadasEletrica" id="" cols="30" rows="1"></textarea>
                    </div>

                </div>


                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Ataque de pragas urbanas em quadros elétricos e de
                            telefonia com fundo de madeira</h4>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalAtaqueEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoAtaqueEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsAtaqueEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Modificações das instalações elétricas / improvisos
                            </h4>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalModificacoesEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoModificacoesEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsModificacoesEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Superaquecimento
                            </h4>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalSuperaquecimentoEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoSuperaquecimentoEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsSuperaquecimentoEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>



                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Fiações e cabos elétricos aparentes / com muitas
                            emendas / partes vivas expostas
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalFiacoesEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoFiacoesEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsFiacoesEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Curto circuito
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalCurtoEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoCurtoEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsCurtoEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Quadro de luz obstruído / trancado / sem identificação dos
                            circuitos
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalQuadroEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoQuadroEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsQuadroEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>


                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Ausência proteção barramento
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalAusenciaEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoAusenciaEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsAusenciaEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Falha de tomada / interruptor
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalFalhaEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoFalhaEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsFalhaEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>

                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Cerca elétrica danificada
                        </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalCercaEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoCercaEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsCercaEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div>


                <div class="row border p-2 ">
                    <div class="col-12 col-md-3">
                        <h6 class="mt-3 text-muted">Outro: </h6>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="text" name="txtLocalOutroEletrica" id="" class="form-control" placeholder="Descricão do Local">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <input type="file" name="txtFotoOutroEletrica" id="" class="form-control">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for=""></label>
                        <label for="">Observações</label>
                        <textarea name="txtObsOutroEletrica" id="" cols="30" rows="1"></textarea>
                    </div>
                </div><br />
            </div>
        </div>



        @endif



        @if (isset($collection["elevadores"]) && $collection["elevadores"] == "elevadores")

        <input type="hidden" name="elevadores" value="elevadores">

        <h1>Elevadores</h1>
        @endif

        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->
        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->

        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->

        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->
        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->
        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->
        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->
        <!-- @if (isset($collection["fachada"]) && $collection["fachada"] == "fachada")


        @endif -->




















        <!-- </form> -->
    </div>
    <!-- fim vedação -->

    </div>
    </div>


    <div class="text-center my-4">
        <button class="btn btn-outline-success" type="submit">Inspecionar Estrutura <i class="fa fa-building" aria-hidden="true"></i></button>
    </div>


    </div>



</form>

@endsection