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
        
        guardarImatge("pelicula");
        
        $peli = new pelicula("", addslashes($_POST['nom']), addslashes($_POST['descripcio']), addslashes($_POST['tipus']), addslashes($_POST['datainici']), addslashes($_POST['datafi']), addslashes($_POST['estrellas']), addslashes($_FILES["file1"]["name"]), addslashes($_POST['idDirector']));
        $peli->inserirPelicula();
        $msg = "Dades introduides correctament!!";
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}
?>

