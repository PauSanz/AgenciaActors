<?php

include('emmagatzemarFoto.php');

require_once ('view/header_view.php');
require_once ('view/afegirdirector_view.php');
require_once ('view/footer_view.php');


require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {
        $imgNeta = guardarImatge("director");
        if (strlen($imgNeta) > 0) {
            $director = new director(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom']), addslashes($imgNeta));
            $res = $director->inserirDirector();

            if ($res->getOk()) {
                $msg = "Dades introduides correctament!!";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            } else {
                $msg = "Error: " . $res->getMsg();
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        } else {
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