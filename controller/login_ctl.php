<?php

require_once("controller/function_AutoLoad.php");
require_once("cookie_ctl.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if (isset($_POST['user']) && isset($_POST['password'])) {
    $name = $_POST['user'];
    $password = $_POST['password'];
    $user = new user($name, $password);
    //if($user->validate()->getOk()){
    $x = $user->checkUser();

<<<<<<< Updated upstream
    if ($x != null) {
        createcookie('user', $x);
        header("location:  ./index.php");
    } else {
=======
	if($x != null){
		createcookie('user', $x);
		header("location:  ./index.php");
	}else{
		
		header("location:  ./index.php?ctl=login&act=form&msg=Usuari inexistent o contrasenya invàlida.");
	}
}else{
//	header("location:./index.php");
}
>>>>>>> Stashed changes

        header("location:  ./index.php?ctl=login&act=form&msg=Usuari inexistent o contrasenya invàlida.");
    }
} else {
    header("location:  ./index.php");
}
?>