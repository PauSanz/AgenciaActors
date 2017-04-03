<?php

include 'emmagatzemarFoto.php';

require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {

        $oldActor = new actor('','','','','');
        $oldActor = $oldActor->obtenirActor($_POST['nif']);
        $actor = new actor(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom']), addslashes($_POST['genere']), $oldActor->getFoto());

        $res = $actor->modificarActor($actor->getNif());
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
header('location:?ctl=actor&act=llista');

?>