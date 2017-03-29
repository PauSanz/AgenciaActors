$(document).ready(function () {
    $('#name').focusout(validarNoBuitIAlfa);

});

function validarNoBuitIAlfa() {
    var val = $('#name').val();
    //var val = document.getElementById("name");

    if (val === '' || !Alfabetic(val)) {
        $('#name').focus();
        $('#errorNom').html("Ha de ser alfabetic o no pot estar buit");
    }

}


function Alfabetic(elemValor) {
    var alphaExp = /^[a-zA-Z]+$/;
    if (elemValor.match(alphaExp)) {
        return true;
    } else {
        return false;
    }
}