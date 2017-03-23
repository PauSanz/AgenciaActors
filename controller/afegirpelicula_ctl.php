<?php

require_once 'view/header_view.php';
require_once 'view/afegirpelicula_view.php';
require_once 'view/footer_view.php';


//session_start();
require_once("controller/autoload_ctl.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {
    if (isset($_POST['submit'])) {

//        if (isset($_SESSION['llibreria'])) {
//            $llibreria = unserialize($_SESSION['llibreria']);
//        } else {
//            $llibreria = New llibreria("Llibreria Vallbona");
//            $llibreria->populateLlibreria();
//        }
        $peli = new pelicula(addslashes($_POST['nom']), addslashes($_POST['descripcio']), addslashes($_POST['genare']), addslashes($_POST['dataInici']), addslashes($_POST['dataFi']), addslashes($_POST['valoracio']), addslashes($_POST['foto']));
        $peli->inserirPelicula();
        $msg = "Dades introduides correctament!!";
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}


?>

