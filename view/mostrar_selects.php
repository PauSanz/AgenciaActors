<?php

//session_start();
require_once("controller/function_AutoLoad.php");

function mostrarDirectors() {
    //if (isset($_SESSION['llibreria'])) {
    /*$llibreria = unserialize($_SESSION['llibreria']);
    $arrayAutors = $llibreria->getArraydeAutors();*/ //CONSULTA PDO DIRECTOR I GUARDAR
    //ARRAY
    
    $agencia = new agencia("ASDF");
    $arrayDirectors = $agencia->rebreDirectors();
    
    echo "<select name='idDirector'>";
    foreach ($arrayDirectors as $director) {
        echo "<option value='" . $director->getNif() . "'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
    }
    echo "</select>";
    //}
}
