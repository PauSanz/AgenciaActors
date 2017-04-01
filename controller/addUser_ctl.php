<?php

require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
require_once("controller/cookie_ctl.php");
$msg = null;

try {
    if (isset($_POST['submit'])) {
        $user = new user('', addslashes($_POST['user']), addslashes($_POST['password1']));
        $user->addUser();
        $msg = "Dades introduides correctament!!";
        createcookie("user", $user->getName());
        header("location: index.php");
    } else {
        $msg = "Acces denegat";
    }
} catch (Exception $e) {
    $msg = "Error en introduir les dades.";
}
?>
