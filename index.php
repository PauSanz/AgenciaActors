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

    case "director";
        switch ($act) {
            case "afegir":
                include "controller/afegirdirector_ctl.php";
                break;
            case "modificar":
                include "controller/modificardirector_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminardirector_ctl.php";
                break;
        }
        break;
    case "usuari";
        switch ($act) {
            case "login":
                include "controller/login_ctl.php";
                break;
            case "logout":
                include "controller/logout_ctl.php";
                break;          
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>

