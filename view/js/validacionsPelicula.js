$(document).ready(function () {
    $('#name').focusout(validarNoBuitIAlfaNom);
    $('#tipus').focusout(validarNoBuitIAlfaTipus);
    $('#datainici').focusout(validarDataInici);
    $('#datafi').focusout(validarDataFi);
    validarIntervalDates();
});
var formatDataInici = true;
var formatDataFi = true;

function validarNoBuitIAlfaNom() {
    var val = $('#name').val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#name').focus();
        $('#errorNom').html("El nom ha de ser alfabètic i no pot estar buit.");
    } else {
        $('#errorNom').html("");
    }

}

function validarNoBuitIAlfaTipus() {
    var val = $('#tipus').val();
    var valor = val.trim();

    if (valor === '' || !Alfabetic(valor)) {
        $('#tipus').focus();
        $('#errorTipus').html("El tipus ha de ser alfabètic i no pot estar buit.");
    } else {
        $('#errorTipus').html("");
    }

}


function validarDataInici() {
    var val = $('#datainici').val();
    alert(val);
    if (!validarFormatData(val)) {
        formatDataInici = false;
        $('#errorDataInici').html("Format de la data incorrecte.");
    } else {
        $('#errorDataInici').html("");
    }

}

function validarDataFi() {
    var val = $('#datafi').val();
    if (!validarFormatData(val)) {
        formatDataFi = false;
        $('#errorDataFi').html("Format de la data incorrecte.");
    } else {
        $('#errorDataFi').html("");
    }

}

function Alfabetic(elemValor) {
    var alphaExp = /^[a-zA-Z\s]+$/;
    if (elemValor.match(alphaExp)) {
        return true;
    } else {
        return false;
    }
}

function validarFormatData(dateString) {


    // revisar el patrón
    if (!/^\d{4}\-\d{1,2}\-\d{1,2}$/.test(dateString)) {
        return false;
    }

    // convertir los numeros a enteros
    var parts = dateString.split("-");
    var day = parseInt(parts[2], 10);
    var month = parseInt(parts[1], 10);
    var year = parseInt(parts[0], 10);
    var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    // Revisar los rangos de año y mes
    if ((year < 1000) || (year > 3000) || (month == 0) || (month > 12)) {
        return false;
    }

    // Ajustar para los años bisiestos
    if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)) {
        monthLength[1] = 29;
    }

    // Revisar el rango del dia
    return day > 0 && day <= monthLength[month - 1];
}

function validarIntervalDates() {
    var dataInici = $('#datainici').val();
    var dataFi = $('#datafi').val();
    if (formatDataInici == true && formatDataFi == true) {
        if (dataInici < dataFi) {
            $('#errorIntervalDates').html("La data fi no pot ser antarior a la inicial.");
        }
    }

}