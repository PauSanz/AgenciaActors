<?php

function guardarImatge($subcarpeta) {
    $fotoAGuardar = $_FILES["file1"]["name"];
    //Metoda de netejar
    
    $validextensions = array("jpeg", "jpg", "png");

    $temporary = explode(".", $_FILES["file1"]["name"]);
    $file_extension = end($temporary);

    $extensionAux = $_FILES["file1"]["type"];
    $sizeAux = $_FILES["file1"]["size"];
    //20.000.000 byte
    //&& in_array($file_extension, $validextentions)
    $comparationExtension = in_array($file_extension, $validextentions);
    //approx. 100kb files can be uploaded
    
    $rutaDesti = $_SERVER['DOCUMENT_ROOT'] . "/AgenciaActors/view/images/" . $subcarpeta . "/" . $fotoAGuardar;
    
    
    
    if ((($_FILES["file1"]["type"] == "image/png") || ($_FILES["file1"]["type"] == "image/jpg") || ($_FILES["file1"]["type"] == "image/jpeg")) && ($_FILES["file1"]["size"] < 20000000)) {

        if (file_exists($rutaDesti)) {
            move_uploaded_file($_FILES["file1"]["tmp_name"], $rutaDesti);
        }
    }
}
