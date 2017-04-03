<<<<<<< HEAD
<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $director = new director('','','','');
            $nifdir = $_REQUEST['dni'];
            $director = $director->obtenirDirector($nifdir);            
            $res = $director->eliminarDirector();
            
            if ($res->getOk()) {
             $msg = "Director eliminat";
             echo "<script type='text/javascript'>alert('$msg');</script>";
             
            }else{
             $msg = "Error: ".$res->getMsg();
             echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
            include "llistadirectors_ctl.php";;
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
=======
<?php
require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

$msg = null;
try {    
            $director = new director('','','','');
            $nifdir = $_REQUEST['dni'];
            $director = $director->obtenirDirector($nifdir);            
            $res = $director->eliminarDirector();
            
            if ($res->getOk()) {
             $msg = "Director eliminat";
             echo "<script type='text/javascript'>alert('$msg');</script>";
             
            }else{
             $msg = "Error: ".$res->getMsg();
             echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
            include "llistadirectors_ctl.php";;
          
} catch (Exception $e) {
    $msg = "Error al eliminar.";
}
>>>>>>> master
?>