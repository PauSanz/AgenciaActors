<?php
	if(isset($_COOKIE['user'])){
		header('Location: index.php?ctl=session&action=destroy');
	}else{
		header('Location: index.php?ctl=login&action=form');
	}
?>