<?php
	function createcookie($name, $value){
		setcookie($name, $value, time() + (86400*30), "/");
	}

	function deletecookie($name){
		$x = null;
		
		if(isset($_COOKIE[$name])){
			$x = $_COOKIE[$name];
			setcookie($name, "", time() - 3600, "/");
		}

		return $x;
	}

	function getcookie($name){
		$x = null;
		
		if(isset($_COOKIE[$name])){
			$x = $_COOKIE[$name];
		}
		
		return $x;
	}
?>