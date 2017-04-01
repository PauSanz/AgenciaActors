<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $pelicula = new pelicula('','','','','','','','','');
            $idpel = $_REQUEST['id'];
            $pelicula = $pelicula->obtenirPelicula($idpel);            
            $res = $pelicula->esborrarPelicula();
            
            if ($res->getOk()) {
             $msg = "Pelicula eliminada";
             echo "<script type='text/javascript'>alert('$msg');</script>";
             
            }else{
             $msg = "Error: ".$res->getMsg();
             echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
            include "llistapelicules_ctl.php";
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
?>