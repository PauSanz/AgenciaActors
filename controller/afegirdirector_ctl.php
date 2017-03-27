<?php

require_once ('view/header_view.php');
require_once ('view/afegirdirector_view.php');
require_once ('view/footer_view.php');


require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {
        $director = new director(addslashes($_POST['nif']), addslashes($_POST['nom']), addslashes($_POST['cognom']), addslashes($_POST['file1']));
        //$director->inserirDirector();
        
        $res = $director->inserirDirector();
          if($res->getOk()){
          $msg = "Dades introduides correctament!!";
          }else{
          $msg = "Error ".$res->getMsg();
          }
          
        
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}


?>