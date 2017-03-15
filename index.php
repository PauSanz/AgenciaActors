<?php

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
    $_SESSION['user'] = "";
}
$ctl = "inici";

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
                include "controler/afegirdirector_ctl.php";
                break;
            case "modificar":
                include "controler/modificardirector_ctl.php";
                break;
            case "eliminar":
                include "controler/eliminardirector_ctl.php";
                break;
        }
        break;
    default:
        include "controler/" . $ctl . "_ctl.php";
        break;
}
?>

