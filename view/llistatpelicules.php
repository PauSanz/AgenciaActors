<?php
//session_start();
require_once("controller/function_AutoLoad.php");

function mostrarPelis() {
    $agencia = new agencia("agen");
    $arrayDePelis = $agencia->rebrePelis();
   
    echo "<div>";
    foreach ($arrayDePelis as $data) {
        echo"<div class='col-md-3 col-sm-6'>";
        echo"<div class='panel panel-default text-center'>";
        echo"<div class='panel-heading2'>";
        echo"<span class='fa-stack fa-5x'>";
        $imatge ="<img class='rodona'heigh ='150px' width='150px' src='view/";
        $foto = $data->getFoto();
        $pathphoto = $imatge . $foto . "'>";
        echo $pathphoto;
        echo"</span>";
        echo"</div>";
        echo"<div class='panel-danger'>";
        echo"<h4 class='lletrablanca'>";
        echo $data->getNom();
        echo"</h4>";
        echo"<p class='lletrablanca'>";
        echo $data->getTipus();
        echo"</p>";
        echo"<div class='row'>";
        echo"<div class='col-lg-4'>";
        echo"<a href='#'><i class='fa fa-pencil-square-o fa-2x colorwhite'></i></a>";
        echo"</div>";
        echo"<div class='col-lg-4'>";        
        echo"<a href='#'><i class='fa fa-search fa-2x colorwhite'></i></a>";
        echo"</div>";
        echo"<div class='col-lg-4'>";
        echo"<a href='#'><i class='fa fa-trash-o fa-2x colorwhite'></i></a>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
    }
    echo"</div>";
}

?>  
