$(document).ready(function () {
    /* PELI */
    $('#name').focusout(validarNoBuitIAlfaNomPeli);
    $('#tipus').focusout(validarNoBuitIAlfaTipus);
    $('#datainici').focusout(validarDataInici);
    $('#datafi').focusout(validarDataFi);
    validarImatge(); //Tant per Peli, Actor i Director.
    $('#imatge').change(validarImatge);
    $('#message').change(validarDescripcio);

    /* ACTOR I DIRECTOR */
    $('#nif').focusout(validarNif);
    $('#nom').focusout(validarNoBuitIAlfaNom);
    $('#cognom').focusout(validarNoBuitIAlfaCognom);
    $('#imatge').change(validarImatge);
    $("#botoGuardar").click(validarFormulari); //Tant per Peli, Actor i Director.

    /* PAPER*/
    $('#nomPaper').focusout(validarNoBuitIAlfaNomPaper);
    $("#botoGuardarPaper").click(validarFormulariPaper);
});

var formatDataInici = true;
var formatDataFi = true;
var totOkFormulari = true;

function validarNoBuitIAlfaNomPeli() {
    var val = $('#name').val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#name').focus();
        $('#errorNom').html("El nom ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#errorNom').html("");
        totOkFormulari = true;
    }

}

function validarNoBuitIAlfaNomPaper() {

    var val = $('#nomPaper').val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#nomPaper').focus();
        $('#errorNom').html("El nom ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#errorNom').html("");
        totOkFormulari = true;
    }
}

function validarNoBuitIAlfaTipus() {
    var val = $('#tipus').val();
    var valor = val.trim();
    if (valor == '' || !Alfabetic(valor)) {
        $('#tipus').focus();
        $('#errorTipus').html("El tipus ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#errorTipus').html("");
        totOkFormulari = true;
    }

}


function validarDataInici() {
    var val = $('#datainici').val();
    if (!validarFormatData(val)) {
        formatDataInici = false;
        $('#errorDataInici').html("Format de la data incorrecte.");
        totOkFormulari = false;
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
        totOkFormulari = false;
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
            $('#errorIntervalDates').html("La data fi no pot ser anterior ni igual que la d'inici.");
            interval = false;
            totOkFormulari = false;
        } else if (interval == false || comparararDates(dataInicial, dataFinal)) {
            $('#errorIntervalDates').html("");
            totOkFormulari = true;
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

function validarImatge() {
    var archivo = $('#imatge').val();
    var extensiones_permitidas = new Array(".png", ".jpg", ".jpeg");
    var mierror = "";
    if (!archivo) {

        mierror = "No has seleccionat cap imatge encara.";
        $('#errorImg').html(mierror);
        totOkFormulari = false;
    } else {

        var extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();

        var permitida = false;

        for (var i = 0; i < extensiones_permitidas.length; i++) {
            if (extensiones_permitidas[i] == extension) {
                permitida = true;
                break;
            }
        }
        if (!permitida) {
            mierror = "Comprova la extensió dels fitxers a pujar. \nNomés és pot pujar els fitxers amb extensió: " + extensiones_permitidas.join();
            $('#errorImg').html(mierror);
            totOkFormulari = false;
        } else {
            $('#errorImg').html("Imatge correcte!");
            totOkFormulari = true;
        }
    }
}

function validarDescripcio() {

    if ($('#message').val().trim() == "") {
        $('#errorDescripcio').html("Si us plau, escriu una breu descripció de la pel·lícula.");
        totOkFormulari = false;
    } else {
        totOkFormulari = true;
    }
    //totOkFormulari = true;

}
function validarNoBuitIAlfaNom() {
    var val = $('#nom').val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#nom').focus();
        $('#errorNom').html("El nom ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#errorNom').html("");
        totOkFormulari = true;
    }

}

function validarNoBuitIAlfaCognom() {
    var val = $('#cognom').val();
    var valor = val.trim();
    if (valor == '' || !Alfabetic(valor)) {
        $('#cognom').focus();
        $('#errorCogom').html("El cognom ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#errorCogom').html("");
        totOkFormulari = true;
    }

}

function validarNif() {
    var dni = $('#nif').val();

    var lockup = 'TRWAGMYFPDXBNJZSQVHLCKE';
    var valueDni = dni.substr(0, dni.length - 1);
    var letra = dni.substr(dni.length - 1, 1).toUpperCase();

    if (lockup.charAt(valueDni % 23) == letra) {
        $('#errorDNI').html("El NIF introduït és vàlid.");
    } else {
        $('#nif').focus();
        $('#errorDNI').html("El NIF introduït no és vàlid.");
    }

}

function validarFormulari() {
    if (!$('#imatge').val()) {
        var mierror = "No has seleccionat cap imatge encara.";
        $('#errorImg').html(mierror);
        totOkFormulari = false;
    }

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#errorFormulari').html("Revisa els camps del formulari, falten dades o dades errònies.");
        return false;
    }

}

function validarFormulariPaper() {

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#errorFormulari').html("Revisa els camps del formulari, falten dades o dades errònies.");
        return false;
    }
}