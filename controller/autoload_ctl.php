<?php
function __autoload($name) {
	$check = false;

	$path = "../model/business/class_".$name.".php";
	
    if(file_exists($path)){
      	require_once($path);
      	$check = true;
    } 

    return $check;
}
?>