<?php

include 'emmagatzemarFoto.php';
require_once ('view/header_view.php');
require_once ('view/afegiractor_view.php');
require_once ('view/footer_view.php');


require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {

    if (isset($_POST['submit'])) {

        $imgNeta = guardarImatge("actor");
        
        if (strlen($imgNeta) > 0) {

            $actor = new actor(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom']), addslashes($_POST['genere']), addslashes($imgNeta));
            $res = $actor->inserirActor();

            if ($res->getOk()) {
                $msg = "Dades introduides correctament!!";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            } else {
                $msg = "Error: " . $res->getMsg();
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }else{
            $msg = "Error: " . "La imatge seleccionada no es valida.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}
?>