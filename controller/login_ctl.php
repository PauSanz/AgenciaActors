<?php
//require_once("autoload.php"); 	
require_once("cookie_ctl.php");
//require_once("../config/config.inc.php");
//require_once("../config/db.inc.php");

if(isset($_POST['user']) && isset($_POST['password'])){
	var_dump($_REQUEST);
	$user = $_POST['user'];
	$password = $_POST['password'];
	//$user = new User($user, $password);
	//if($user->validate()->getOk()){
		createcookie('user', $user);	
		//REDIRIGIR A DONDE SEA
	//}else{
		//CONTRASEÑA ERRÓNEA
	//}

}else{
	//ERROR DE FORMULARIO
}
?>