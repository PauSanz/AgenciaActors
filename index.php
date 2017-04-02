<?php

session_start();

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
    $_SESSION['user'] = "";
}
$ctl = "home";
$act = null;

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}

if (!isset($_COOKIE['user'])) {
    if ($act == "afegir" OR $act == "modificar" OR $act == "eliminar" OR $act == "add") {
        $ctl = "home";
        $act = null;
    }
}

switch ($ctl) {
    case "director":
        switch ($act) {
            case "afegir":
                include "controller/afegirdirector_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminardirector_ctl.php";
                break;
            case "llista":
                include "controller/llistadirectors_ctl.php";
                break;
            case "modificar":
                include "controller/modificarDirector.php";
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
            case "eliminar":
                include "controller/eliminarpelicula_ctl.php";
                break;
            case "llista":
                include "controller/llistapelicules_ctl.php";
                break;
            case "veure":
                include "controller/detallspeli_ctl.php";
                break;
            case "modificar":
                include "controller/modificarPelicula.php";
                break;

            default:
                break;
        }
        break;
    case "actor":
        switch ($act) {
            case "afegir":
                include "controller/afegiractor_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminaractor_ctl.php";
                break;
            case "llista":
                include "controller/llistaactors_ctl.php";
                break;
            case "modificar":
                include "controller/modificarActor.php";
                break;
        }
        break;
    case "paper":
        switch ($act) {
            case "afegir":
                include "controller/afegirpaper_ctl.php";
                break;
//            case "modificar":
//                include "controller/modificarpaper_ctl.php";
//                break;
            case "eliminar":
                include "controller/eliminarpaper_ctl.php";
                break;
            case "llista":
                include "controller/llistapapers_ctl.php";
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
    case "user":
        switch ($act) {
            case 'add':
                include 'controller/addUser_ctl.php';
                break;
            default:
                break;
        }
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

