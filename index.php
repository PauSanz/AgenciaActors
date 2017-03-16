<?php

session_start();
if (!isset ($_SESSION['login'])){
    $_SESSION['login']=false;
    $_SESSION['user']="";
}
$ctl = "home";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}
switch ($ctl) {
    case"cervesa";
        switch ($act) {
            case "afegir":
                include "controler/afegircervesa_ctl.php";
                break;
            case "modificar":
                include "controler/modificarcervesa_ctl.php";
                break;
            case "eliminar":
                include "controler/eliminarcervesa_ctl.php";
                break;
        }
        break;
    case"usuari";
        switch ($act) {
            case "login":
                include "controler/login_ctl.php";
                break;
            case "registre":
                include "controler/registreusuari_ctl.php";
                break;
            case"sortir";
                include "controler/logout.php";
                break;
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>

