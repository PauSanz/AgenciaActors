<?php

function guardarImatge($subcarpeta) {
    $fotoAGuardar = $_FILES["file1"]["name"];

    //Metoda de netejar
    $imgSenseBlancs = str_replace(" ", "_", $fotoAGuardar);


    $validextensions = array("jpeg", "jpg", "png");

    $temporary = explode(".", $_FILES["file1"]["name"]);
    $file_extension = end($temporary);

    //$nomImatgeSenseExtensio = $temporary[0];

    $imgNeta = limpiarStringDeCaracters($imgSenseBlancs);

    $imgDefinitivamentNet = $imgNeta;

    $rutaDesti = $_SERVER['DOCUMENT_ROOT'] . "/AgenciaActors/view/images/" . $subcarpeta . "/" . $imgDefinitivamentNet;


    if ((($_FILES["file1"]["type"] == "image/png") || ($_FILES["file1"]["type"] == "image/jpg") || ($_FILES["file1"]["type"] == "image/jpeg")
            ) && ($_FILES["file1"]["size"] < 20000000)//Approx. 20MB files can be uploaded.
            && in_array($file_extension, $validextensions)) {

        if (!file_exists($rutaDesti)) {
            move_uploaded_file($_FILES["file1"]["tmp_name"], $rutaDesti);
            
        }
        return $imgDefinitivamentNet;
    }
    
}

function limpiarStringDeCaracters($texto) {
    $stringSenseHTML = htmlentities($texto);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $stringSenseHTML);
    return $string;
}
