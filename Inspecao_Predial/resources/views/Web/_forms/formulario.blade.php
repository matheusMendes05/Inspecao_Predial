@extends('layouts.dashboard')

@section('content')

<form action="{{route('inspection.create')}}" method="post" enctype="multipart/form-data">
    @CSRF

    <div class="container">

        <input type="hidden" name="inspecao" value="inspecao">


        <div class="mb-4">
            <h1 class="display-4 text-muted border-bottom">
                Cadastro de Inspeção.
            </h1>
        </div>


        <div class="text-center border bg-success mt-1">
            <h1 class="text-white">Edificio</h1>
        </div>
        <div class="form-row border rounded mt-2 mb-2">


            <div class="form-group col-md-8">
                <label for="" class="form-text">Responsável pela <strong>Inspeção</strong>:</label>
                <input type="text" id="" class="form-control" placeholder="Nome Engenheiro Responsável" name="txtNome" value="{{Auth::user()->name}}">
            </div>

            <div class="form-group col-md-4">
                <label for="" class="form-text">Data: </label>
                <input type="date" id="" class="form-control" placeholder="Data da Inspeção" name="txtData">
            </div>

            <div class="form-group col-md-12">
                <label for="" class="form-text">Nome do Edificio: </label>
                <input type="text" id="" class="form-control" placeholder="Nome do Edificio" name="txtNomeEdificio">
            </div>

            <div class="form-group col-md-8">
                <label for="" class="form-text">Endereço: </label>
                <input type="text" id="" class="form-control" placeholder="Endereço do Edificio" name="txtEndereco">
            </div>

            <div class="form-group col-md-4">
                <label for="" class="form-text">Bairro: </label>
                <input type="text" id="" class="form-control" placeholder="Bairro do Edificio" name="txtBairro">
            </div>

            <div class="form-group col-md-8">
                <label for="" class="form-text">Complemento: </label>
                <input type="text" id="" class="form-control" placeholder="Complemento" name="txtComplemento">
            </div>

            <div class="form-group col-md-4">
                <label for="" class="form-text">CEP: </label>
                <input type="text" id="" class="form-control" placeholder="CEP" name="txtCEP">
            </div>

            <div class="form-group col-md-4">
                <label for="" class="form-text">CNPJ: </label>
                <input type="text" id="" class="form-control" placeholder="CNPJ" name="txtCNPJ">
            </div>


            <div class="form-group col-md-8 border">
                <label for="" class="form-text">Tipologia: </label>
                <div class="form-group col-md-8 pt-3">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Residencial">
                        <label class="form-check-label" for="inlineRadio1">Residencial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Comercial">
                        <label class="form-check-label" for="inlineRadio2">Comercial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Industrial">
                        <label class="form-check-label" for="inlineRadio2">Industrial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="" class="form-text mr-4">Outros: </label>
                        <input type="text" id="" class="form-control" name="txtOutro">
                    </div>


                </div>
            </div>


            <div class="form-group col-md-8">
                <label for="" class="form-text">N° de Pavimentos: </label>
                <input type="text" id="" class="form-control" placeholder="N° de Pavimentos" name="txtNpavimentos">
            </div>

            <div class="form-group col-md-4">
                <label for="" class="form-text">Ano da Construção: </label>
                <input type="date" id="" class="form-control" placeholder="Ano da Construção" name="txtAnoConstrucao">
            </div>

            <div class="form-group col-md-6">
                <label for="" class="form-text">Construtora: </label>
                <input type="text" id="" class="form-control" placeholder="Construtora" name="txtConstrutora">
            </div>

            <div class="form-group col-md-6">
                <label for="" class="form-text">Administrador: </label>
                <input type="text" id="" class="form-control" placeholder="Administrador" name="txtAdministrador">
            </div>

            <div class="form-group col-md-6">
                <label for="" class="form-text"> Responsavel pelo acompanhamento da Obra: </label>
                <input type="text" id="responsavelObra" class="form-control col-10" placeholder="Nome Responsavel" name="responsavelObra">
            </div>


            <!-- 
            <input type="hidden" name="localizacao" id="" value="localizacao">

            <div class="collapse navbar-collapse collapse show" id="form-localizacao">

                <div class="text-center border bg-success mt-1">
                    <h1 class="text-white">Localização - Predial</h1>
                </div>
                <div class="">
        
                    <div class="form-group my-3">
                        <h6>Digite o Endereço da Inspeção - OAE</h6>
                        <input type="text" class="form-control input-sm col-12  " placeholder="Endereço" name="tittle" id="tittle">
                    </div>
                    <div class=" my-2" id="screanMap">
                        <div class="text-center">
                            <p class="text-muted">Para ter mais Precisão em achar o local de inspeção, arraste a bolinha vermelha do mapa ate o local desejado.</p>
                        </div>
                        <div id="map"></div>

                    </div>

                    <div class="row col-12 my-3 " hidden>
                        <div class="col-6">
                            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
                        </div>
                        <div class="col-6">
                            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="text-rigth my-5">
                        <p class="text-primary">OBS: Se o Google maps não aparecer, atualize a pagina e tente novamente.</p>
                    </div>

                </div>
            </div> -->




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
            <!-- </form> -->
        </div>
        <!-- fim vedação -->


    </div>
    </div>

    <div class="text-center my-4">
        <button class="btn btn-success btn-lg" type="submit">Inspecionar Edificio</button>
    </div>

    </div>



</form>

@endsection