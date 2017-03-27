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
        guardarImatge("actor");
        $actor = new actor(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom']), addslashes($_POST['genere']), addslashes($_FILES['file1']['name']));        
        $actor->inserirActor();
        $msg = "Dades introduides correctament!!";
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}


?>