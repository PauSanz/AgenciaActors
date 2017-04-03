<?php

include('emmagatzemarFoto.php');

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



try {
    if (isset($_POST['submit'])) {

        $oldPelicula = new pelicula('', '', '', '', '', '', '', '', '');
        $oldPelicula = $oldPelicula->obtenirPelicula($_POST['idPeli']);

        $peli = new pelicula($_POST['idPeli'], addslashes($_POST['nom']), addslashes($_POST['descripcio']), addslashes($_POST['tipus']), addslashes($_POST['datainici']), addslashes($_POST['datafi']), addslashes($_POST['estrellas']), addslashes($oldPelicula->getFoto()), addslashes($_POST['idDirector']));

        $res = $peli->modificarPelicula($oldPelicula->getIdPelicula());

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
header('location:?ctl=pelicula&act=llista');
?>

