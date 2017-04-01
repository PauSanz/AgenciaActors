<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $actor = new actor('','','','','');
            $nifact = $_REQUEST['dni'];
            $actor = $actor->obtenirActor($nifact);            
            $res = $actor->eliminarActor();
            
            if ($res->getOk()) {
             $msg = "Actor eliminat";
             echo "<script type='text/javascript'>alert('$msg');</script>";
             
            }else{
             $msg = "Error: ".$res->getMsg();
             echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
            include "llistaactors_ctl.php";
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
?>