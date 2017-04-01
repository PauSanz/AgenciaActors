<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $paper = new rol('','','','');
            $iddir = $_REQUEST['id'];
            $paper = $paper->obtenirRol($iddir);            
            $res = $paper->eliminarPaper();
            
            if ($res->getOk()) {
             $msg = "Paper eliminat";
             echo "<script type='text/javascript'>alert('$msg');</script>";
             
            }else{
             $msg = "Error: ".$res->getMsg();
             echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
            include "llistapapers_ctl.php";;
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
?>