$(document).ready(function () {
    $('#name').focusout(validarNoBuitIAlfaNom);
    $('#tipus').focusout(validarNoBuitIAlfaTipus);
    $('#datainici').focusout(validarDataInici);
    $('#datafi').focusout(validarDataFi);
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
    if (valor == '' || !Alfabetic(valor)) {
        $('#tipus').focus();
        $('#errorTipus').html("El tipus ha de ser alfabètic i no pot estar buit.");
    } else {
        $('#errorTipus').html("");
    }

}


function validarDataInici() {
    var val = $('#datainici').val();
    if (!validarFormatData(val)) {
        formatDataInici = false;
        $('#errorDataInici').html("Format de la data incorrecte.");
    } else {
        $('#errorDataInici').html("");
        validarIntervalDates();
    }

}

function validarDataFi() {
    var val = $('#datafi').val();
    if (!validarFormatData(val)) {
        formatDataFi = false;
        $('#errorDataFi').html("Format de la data incorrecte.");
    } else {
        $('#errorDataFi').html("");
        validarIntervalDates();
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
    var interval;
    var dataInici = $('#datainici').val();
    var dataFi = $('#datafi').val();

    var inici = new Date(dataInici);
    var diaInici = inici.getDate();
    var mesInici = inici.getMonth();
    mesInici += 1;
    var anyInici = inici.getFullYear();

    var dataInicial = anyInici + "/" + mesInici + "/" + diaInici;

    var final = new Date(dataFi);
    var diaFi = final.getDate();
    var mesFi = final.getMonth();
    mesFi += 1;
    var anyFi = final.getFullYear();

    var dataFinal = anyFi + "/" + mesFi + "/" + diaFi;


    if (formatDataInici == true && formatDataFi == true) {
        if (!comparararDates(dataInicial, dataFinal)) {
            $('#errorIntervalDates').html("La data fi no pot ser antarior ni igual que la d'inici.");
            interval = false;
        } else if (interval == false || comparararDates(dataInicial, dataFinal)) {
            $('#errorIntervalDates').html("");
        }


    }

}

function comparararDates(dataInici, dataFi) {

    var mesInicial = dataInici.substring(5, 6);
    var diaInicial = dataInici.substring(7, 10);
    var anyInicial = dataInici.substring(0, 4);
    var mesFinal = dataFi.substring(5, 6);
    var diaFinal = dataFi.substring(7, 10);
    var anyFInal = dataFi.substring(0, 4);
    if (anyInicial < anyFInal) {
        return(true);
    } else {
        if (anyInicial == anyFInal) {
            if (mesInicial < mesFinal) {
                return(true);
            } else {
                if (mesInicial == mesFinal) {
                    if (diaInicial < diaFinal) {
                        return(true);
                    } else {
                        return(false);
                    }
                } else {
                    return(false);
                }
            }
        } else {
            return(false);
        }
    }
}