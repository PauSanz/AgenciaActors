<?php
	session_start();
	require_once("autoload_ctl.php"); 	
	require_once("cookie_ctl.php"); 	
	require_once("../config/config.inc.php");
	require_once("../config/db.inc.php");
	require_once("../config/db.inc.php");

	
if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
	$user = new User($_COOKIE['user'], $_COOKIE['pass']);
	if($user->validate()->getOk()){
		
		$db = new mysqli($GLOBALS['server'], $GLOBALS['USER'], $GLOBALS['PASS'], $GLOBALS['bd']);

		$query = "SELECT name 
				FROM user 
				WHERE username = '".$user->username."' 
				AND password = '"$user->password"';";
		
		$result = $db->query($query);

		if($result != null){
			createcookie('user', $result);
			//REDIRIGIR A LA PÁGINA PRINCIPAL
		}else{
			//CONTRASEÑA O USUARIO ERRÓNEOS
		}
	}
}else{

}
?>