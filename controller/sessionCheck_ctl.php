<?php
	if(isset($_COOKIE['user'])){
		header('Location: index.php?ctl=session&act=destroy');
	}else{
		header('Location: index.php?ctl=login&act=form');
	}
?>