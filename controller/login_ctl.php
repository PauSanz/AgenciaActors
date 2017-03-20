<?php

if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
	$user = new User($_COOKIE['user'], $_COOKIE['pass']);
	if($user->validate()->getOk()){

	}
}else{

}
?>