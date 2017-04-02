<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $pelicula = new pelicula("", "", "", "", "", "", "", "", "");
    $x = $pelicula->obtenirPelicula($id);
}
require_once ('view/header_view.php');
require_once ('view/modifyFilm.php');
require_once ('view/footer_view.php');
?>