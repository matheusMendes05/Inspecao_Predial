
let select = document.querySelector('#descValue');
let content = document.querySelector('#content');

let formularios = [];


function adicionar(element) {
    // obtendo valor do select
    let value = select.options[select.selectedIndex].value;
    let item =

        `<div class="row border border-light my-4">` +
        `<div class="col-12 bg-light p-2">` +
        `<div class="row ">` +
        `<div class="col-4">` +
        `<label for="" class="form-text">Sistema</label>` +
        `<input type="text" name="descricao[]" id="" class="form-control" value ="${value}" readonly> ` +
        `</div>` +
        `<div class="col-4">` +
        `<label for="" class="form-text">Local</label>` +
        `<input type="text" name="local[]" class="form-control">` +
        `</div>` +

        `<div class="col-4">` +
        `<label for="" class="form-text">Foto</label>` +
        `<input type="file" class="form-control" name="foto[]">` +
        `</div>` +

        `<div class="col-12">` +
        `<label for="" class="form-text">Observações</label>` +
        `<textarea name="obs[]" id="" cols="150" rows="5" class="form-control"></textarea>` +

        '<p class="text-rigth mt-3">' +
        '<Button class="btn btn-danger" id="bottonAdd" onclick="remove(this)">' +
        'excluir <i class="fa fa-trash" aria-hidden="true"></i>' +
        '</Button>' +
        '</p>' +

        `</div>` +

        `</div>` +
        `</div>` +
        `</div>`;

    formularios.push(item);
    content.innerHTML += item;
}


function remove(e) {
    e.parentNode.parentNode.parentNode.parentNode.outerHTML = '';
    formularios.splice(formularios.indexOf(e), 1);
}