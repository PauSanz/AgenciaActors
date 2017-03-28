<?php

include('emmagatzemarFoto.php');

require_once ('view/header_view.php');
require_once ('view/afegirpelicula_view.php');
require_once ('view/footer_view.php');

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {

        $imgDefinitivamentNet = guardarImatge("pelicula");

        $peli = new pelicula("", addslashes($_POST['nom']), addslashes($_POST['descripcio']), addslashes($_POST['tipus']), addslashes($_POST['datainici']), addslashes($_POST['datafi']), addslashes($_POST['estrellas']), addslashes($imgDefinitivamentNet), addslashes($_POST['idDirector']));
        $res = $peli->inserirPelicula();

        if ($res->getOk()) {
            $msg = "Dades introduides correctament!!";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        } else {
            $msg = "Error: " . $res->getMsg();
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}
?>

