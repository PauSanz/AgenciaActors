<?php
	require_once("cookie_ctl.php");
	deletecookie('user');
	session_start();
	session_destroy();
	header("Location: ./index.php");
?>