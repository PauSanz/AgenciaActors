<?php

//session_start();
//require_once("../controller/function_AutoLoad.php"); 	
//require_once("../config/config.inc.php");
//require_once("../config/db.inc.php");
//require_once "../view/printError.php";

require_once 'view/header_view.php';
require_once 'view/afegiractor_view.php';
require_once 'view/footer_view.php';



$msg = null;
try {
    if (isset($_POST['submit'])) {
        //comprovem si existeix
        if (isset($_REQUEST['nif'])) {
        $nif = $_REQUEST['nif'];    
        }
        if (isset($_REQUEST['nom'])) {
        $nom = $_REQUEST['nom'];    
        }                
        if (isset($_REQUEST['cognom'])) {
        $cognom = $_REQUEST['cognom'];    
        }
        if (isset($_REQUEST['genere'])) {
        $genere = $_REQUEST['genere'];    
        }
        if (isset($_REQUEST['foto'])) {
        $foto = $_REQUEST['foto'];    
        }        
        
        $actor = new actor($nom, $cognom,$genere,$foto);
        
        $agencia->addActor(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom'])
                , addslashes($_POST['genere']), addslashes($_POST['foto']));
        $msg = "Dades introduides correctament!";
    } else {
        $msg = "You should come from the form";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}

if ($msg != null) {
    printError($msg);
}
