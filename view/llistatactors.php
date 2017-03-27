<?php
//session_start();
require_once("controller/function_AutoLoad.php");

function mostrarActors() {
    $agencia = new agencia("agen");
    $arrayDeActors = $agencia->rebreActors();
    
    echo "<div>";
    foreach ($arrayDeActors as $data) {
        echo"<div class='col-md-3 col-sm-6'>";
        echo"<div class='panel panel-default text-center'>";
        echo"<div class='panel-heading'>";
        echo"<span class='fa-stack fa-5x'>";
        $imatge ="<img heigh ='150px' width='150px' src='view";
        $foto = $data->getFoto();
        $pathphoto = $imatge . $foto . "'>";
        echo $pathphoto;
        echo"</span>";
        echo"</div>";
        echo"<div class='panel-body'>";
        echo"<h4>";
        echo $data->getNom();
        echo"</h4>";
        echo"<p>";
        echo $data->getCognom();
        echo"</p>";
        echo"<a href='#' class='btn btn-danger'>Veure mes</a>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
    }
    echo"</div>";
}

?>  