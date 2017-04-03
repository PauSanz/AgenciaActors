<<<<<<< HEAD
<?php

include('emmagatzemarFoto.php');

require_once ('view/header_view.php');
require_once ('view/afegirpaper_view.php');
require_once ('view/footer_view.php');


require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {
        
        
            $paper = new rol('', addslashes($_POST['nom']), addslashes($_POST['actor']), addslashes($_POST['pelicula']));
            $res = $paper->inserirPaper();

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
=======
<?php

include('emmagatzemarFoto.php');

require_once ('view/header_view.php');
require_once ('view/afegirpaper_view.php');
require_once ('view/footer_view.php');


require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");



$msg = null;
try {
    if (isset($_POST['submit'])) {
        
        
            $paper = new rol('', addslashes($_POST['nom']), addslashes($_POST['actor']), addslashes($_POST['pelicula']));
            $res = $paper->inserirPaper();

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
>>>>>>> master
?>