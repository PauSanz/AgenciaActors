var peticion = null;
var elementoSeleccionado = -1;
var sugerencias = null;
var cacheSugerencias = {};

function inicializa_xhr() {
    if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

Array.prototype.formateaLista = function () {
    var codigoHtml = "";

    codigoHtml = "<ul>";
    for (var i = 0; i < this.length; i++) {
        if (i == elementoSeleccionado) {
            codigoHtml += "<li class=\"seleccionado\">" + this[i] + "</li>";
        } else {
            codigoHtml += "<li>" + this[i] + "</li>";
        }
    }
    codigoHtml += "</ul>";

    return codigoHtml;
};

function autocompleta() {
    var elEvento = arguments[0] || window.event;
    var tecla = elEvento.keyCode;

    if (tecla == 40) { // Flecha Abajo
        if (elementoSeleccionado + 1 < sugerencias.length) {
            elementoSeleccionado++;
        }
        muestraSugerencias();
    } else if (tecla == 38) { // Flecha Arriba
        if (elementoSeleccionado > 0) {
            elementoSeleccionado--;
        }
        muestraSugerencias();
    } else if (tecla == 13) { // ENTER o Intro
        seleccionaElemento();
    } else {
        var texto = document.getElementById("buscar").value;

        // Si es la tecla de borrado y el texto es vacío, ocultar la lista
        if (tecla == 8 && texto == "") {
            borraLista();
            return;
        }

        if (cacheSugerencias[texto] == null) {
            /*peticion = inicializa_xhr();
             
             peticion.onreadystatechange = function() { 
             if(peticion.readyState == 4) {
             if(peticion.status == 200) {
             sugerencias = eval('('+peticion.responseText+')');
             if(sugerencias.length == 0) {
             sinResultados();
             }
             else {
             cacheSugerencias[texto] = sugerencias;
             actualizaSugerencias();
             }
             }
             }
             };
             
             peticion.open('POST', 'controller/searchpelicula_ctl.php?nocache='+Math.random(), true);
             peticion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
             peticion.send('str='+encodeURIComponent(texto));*/

            /*var x = $("#buscar").val();
             
             //$("#existentes").html("");
             if (x.length > 0) {
             $.getJSON("controller/searchpelicula_ctl.php", {str: x}, carregaResultats) //PETICION "AJAX" la otra seria HTTPREQUEST
             .fail(function () {
             //console.log( "error comprovant si el nickname existeix" );
             
             });
             return false;
             }*/

            var request = $.ajax({
                url: "controller/searchpelicula_ctl.php",
                type: "POST",
                data: {str: $("#buscar").val()},
                dataType: "html",
                success: function (data) {
                    /*
                     var aux = JSON.parse(data);
                     var cnt = 0;
                     for (var prop in aux) {
                     cnt++;
                     sugerencias.push(aux[cnt]);
                     }
                     
                     
                     if (sugerencias.length == 0) {
                     sinResultados();
                     }
                     else {
                     cacheSugerencias[texto] = sugerencias;
                     actualizaSugerencias();
                     }
                     */

                    sugerencias = eval('(' + data + ')');
                    if (sugerencias.length == 0) {
                        sinResultados();
                    } else {
                        cacheSugerencias[texto] = sugerencias;
                        actualizaSugerencias();
                    }


                }
            });

        } else {
            sugerencias = cacheSugerencias[texto];
            actualizaSugerencias();
        }
    }
}

function carregaResultats(dades) {
    $x = dades;

    /*sugerencias = eval('(' + peticion.responseText + ')');
     if (sugerencias.length == 0) {
     sinResultados();
     }
     else {
     cacheSugerencias[texto] = sugerencias;
     actualizaSugerencias();
     }*/
}

function sinResultados() {
    document.getElementById("sugerencias").innerHTML = "No s'han trobat pel·licules";
    document.getElementById("sugerencias").style.display = "block";
}

function actualizaSugerencias() {
    elementoSeleccionado = -1;
    muestraSugerencias();
}

function seleccionaElemento() {
    if (sugerencias[elementoSeleccionado]) {
        /*
         document.getElementById("buscar").value = sugerencias[elementoSeleccionado];
         borraLista();
         */
        var res = sugerencias[elementoSeleccionado].split(" -");
        //alert(res[0]);
        window.location.href = '?ctl=pelicula&act=veure&id=' + res[0];

    }
}

function muestraSugerencias() {
    var zonaSugerencias = document.getElementById("sugerencias");

    zonaSugerencias.innerHTML = sugerencias.formateaLista();
    zonaSugerencias.style.display = 'block';
}

function borraLista() {
    document.getElementById("sugerencias").innerHTML = "";
    document.getElementById("sugerencias").style.display = "none";
}

window.onload = function () {
    // Crear elemento de tipo <div> para mostrar las sugerencias del servidor
    //var elDiv = document.createElement("div");
    //elDiv.id = "sugerencias";
    //document.body.appendChild(elDiv);
    $("#buscar").keyup(autocompleta);
    //document.getElementById("buscar").onkeyup = autocompleta;
    $("#buscar").focus();
    //document.getElementById("buscar").focus();
}