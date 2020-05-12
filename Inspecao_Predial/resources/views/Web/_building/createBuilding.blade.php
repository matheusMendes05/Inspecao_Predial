@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom">
            Cadastro de Edificio.
        </h1>
    </div>

    <div class="my-4 ">

        <!-- Form building-->

        <form action="{{ route('duilding.new')}}" method="post">
            @CSRF
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Residencial</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Comercial</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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



            </div>

            <div class="text-center my-4">
                <button type="submit" class="btn btn-outline-success">Enviar</button>
            </div>
        </form>

    </div>
</div>


@endsection