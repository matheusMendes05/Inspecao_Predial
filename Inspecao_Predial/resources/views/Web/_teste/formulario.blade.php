<!doctype html>
<html lang="pt-BR">

<head>
    <title>Teste de Formulario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



    <div class="container">
        <div class="text-center border-bottom my-4">
            <h1 class="display-4">Formularios</h1>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <select class="custom-select" id="descValue" name="tipo">
                        <option selected value="Fissuras">Fissuras</option>
                        <option value="Destacamento_DD">Destacamento / desagregação / desplacamento</option>
                        <option value="Armadura_Exposta">Armadura exposta</option>
                        <option value="Corrosao">Corrosão</option>
                        <option value="Peca_estrutural">Peça estrutural com deformação excessiva</option>
                        <option value="Irregularidades">Irregularidades geométricas, falhas de concretagem</option>
                        <option value="Eflorescencia">Eflorescência / lixiviação / infiltração</option>
                        <option value="Outros">Outros</option>
                    </select>
                    <div class="input-group-append">
                        <span class="btn btn-outline-success" id="bottonAdd" onclick="adicionar('descValue')">
                            Adicionar <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <form class="mt-4" action="{{ route('teste.store')}}" method="post" enctype="multipart/form-data">
            @CSRF

            <div id="content">

            </div>

            <div class="text-center my-4">
                <button type="submit" class="btn btn-outline-success">Verificar</button>
            </div>

        </form>



    </div>


    <script src="{{ url(mix('Web/js/estruturas.js'))}}"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>