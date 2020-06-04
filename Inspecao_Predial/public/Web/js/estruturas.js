let select = document.querySelector('#descValue');
let content = document.querySelector('#content')


let estruturas =

    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option selected>Fissuras</option>' +
    '<option value="Destacamento desagregação desplacamento">Destacamento / desagregação / desplacamento</option>' +
    '<option value="Armadura exposta">Armadura exposta</option>' +
    '<option value="Corrosão">Corrosão</option>' +
    '<option value="Peça estrutural com deformação excessiva">Peça estrutural com deformação excessiva</option>' +
    '<option value="Irregularidades geométricas, falhas de concretagem">Irregularidades geométricas, falhas de concretagem</option>' +
    '<option value="Eflorescência / lixiviação / infiltração">Eflorescência / lixiviação / infiltração</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';


let fundacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option selected>Erosão do solo</option>' +
    '<option value="">Recalque diferencial</option>' +
    '<option value="">Outro</option>' +
    '</select>';

let vedacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option selected>Fissura/Trinca</option>' +
    '<option value="">Eflorescência</option>' +
    '<option value="">Infiltração</option>' +
    '<option value="">Irregularidades geométricas (esquadro / prumo / nível / planeza)</option>' +
    '<option value="">Outro</option>' +
    '</select>';

let forro =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option selected>Deformação excessiva</option>' +
    '<option value="">Fissura</option>' +
    '<option value="">Desencaixe</option>' +
    '<option value="">Utilização de material sujeito a corrosão</option>' +
    '<option value="">Deficiência no dimensionamento ou inexistência de alçapões </option>' +
    '<option value="">Outro</option>' +
    '</select>';

let parede =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option selected>Fissura</option>' +
    '<option value="">Destacamento / desagregação / descolamento</option>' +
    '<option value="">Infiltração</option>' +
    '<option value="">Eflorescência / manchas de mofo / bolor</option>' +
    '<option value="">Falta ou deficiência nas juntas de trabalho e rejunte </option>' +
    '<option value="">Descascamento / bolhas / enrugamento</option>' +
    '<option value="">Falha rejunte </option>' +
    '<option value="">Abertura improvisada para passagem de cabos</option>' +
    '<option value="">Som cavo</option>' +
    '<option value="">Outro</option>' +
    '</select>';

function teste() {
    let value = select.options[select.selectedIndex].value;

    console.log(value);

    if (value == 'Estruturas') {
        content.innerHTML = estruturas;
    }
    if (value == 'Fundacao') {
        content.innerHTML = fundacao;
    }
    if (value == 'Vedacao') {
        content.innerHTML = vedacao;
    }
    if (value == 'Forro') {
        content.innerHTML = forro;
    }
    if (value == 'Parede') {
        content.innerHTML = parede;
    }

}