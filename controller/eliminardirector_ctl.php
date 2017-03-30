<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $director = new director('','','','');
            $nifdir = $director->getNif();
            $res = $director->cercarPerNifDirector($nifdir);            
            $msg = $res;
            echo "<script type='text/javascript'>alert('$msg');</script>";
            if ($res) {
             $elimina = $director->eliminarDirector($res); 
             alert("S'ha eliminat");
            }else{
             alert("ERROR");
            }
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
?>