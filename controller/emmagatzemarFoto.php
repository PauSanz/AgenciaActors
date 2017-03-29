<?php

function guardarImatge($subcarpeta) {
    // $fotoAGuardar = $_FILES["file1"]["error"];
    $fotoAGuardar = $_FILES["fotoPujada"]["name"];

    //Metoda de netejar
    $imgSenseBlancs = str_replace(" ", "_", $fotoAGuardar);


    $validextensions = array("jpeg", "jpg", "png");

    $temporary = explode(".", $_FILES["fotoPujada"]["name"]);
    $file_extension = end($temporary);

    //$nomImatgeSenseExtensio = $temporary[0];

    $imgNeta = limpiarStringDeCaracters($imgSenseBlancs);

    $imgDefinitivamentNet = $imgNeta;

    $rutaDesti = $_SERVER['DOCUMENT_ROOT'] . "/AgenciaActors/view/images/" . $subcarpeta . "/" . $imgDefinitivamentNet;


    if ((($_FILES["fotoPujada"]["type"] == "image/png") || ($_FILES["fotoPujada"]["type"] == "image/jpg") || ($_FILES["fotoPujada"]["type"] == "image/jpeg")
            ) && ($_FILES["fotoPujada"]["size"] < 20000000)//Approx. 20MB files can be uploaded.
            && in_array($file_extension, $validextensions)) {

        if (!file_exists($rutaDesti)) {
            move_uploaded_file($_FILES["fotoPujada"]["tmp_name"], $rutaDesti);
        }
        return $imgDefinitivamentNet;
    }
}

function limpiarStringDeCaracters($texto) {
    $stringSenseHTML = htmlentities($texto);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $stringSenseHTML);
    return $string;
}
