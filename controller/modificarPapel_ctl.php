<?php

include('emmagatzemarFoto.php');

require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {
        
        
            $paper = new rol('', addslashes($_POST['nom']), addslashes($_POST['actor']), addslashes($_POST['pelicula']));
            $res = $paper->modificarPaper();

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

header('location:?act=papel&ctl=llista');
?>