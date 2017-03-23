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
    case "director":
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
            default:
                break;
        }
        break;
    case "pelicula":
        switch ($act) {
            case "afegir":
                include "controller/afegirpelicula_ctl.php";
                break;
            case "modificar":
                include "controller/modificarpelicula_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarpelicula_ctl.php";
                break;
            default:
                break;
        }
        break;
    case "session":
        switch ($act) {
            case "check":
                include "controller/sessionCheck_ctl.php";
                break;
            case "create":
                include "controller/login_ctl.php";
                break;
            case "destroy":
                include "controller/logout_ctl.php";
                break;
            default:
                break;
        }
        break;
    case "login":
        switch ($act) {
            case "form":
                include "controller/login.php";
                break;
            default:
                break;
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>

