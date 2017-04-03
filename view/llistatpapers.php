<<<<<<< HEAD
<?php

//session_start();
require_once("controller/function_AutoLoad.php");

function mostrarPapers() {
    $agencia = new agencia("agen");
    $arrayDePapers = $agencia->rebrePapers();
    if (count($arrayDePapers) > 0) {
        echo "<div>";
        foreach ($arrayDePapers as $data) {
            $peli = new pelicula('', '', '', '', '', '', '', '', '', '');
            $peli = $peli->obtenirPelicula($data->getIdPelicula());
            $actor = new actor('', '', '', '', '');
            $actor = $actor->obtenirActor($data->getIdActor());

            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            echo"<div class='panel panel-default text-center'>";

            echo"<div class='panel-danger'>";
            echo"<h4 class='lletrablanca'>";
            echo $peli->getNom();
            echo"</h4>";
            echo"<p class='lletrablanca'>";
            echo $actor->getNom() . " " . $actor->getCognom() . " -> " . $data->getNom();
            echo"</p>";
            echo"<div class='row'>";
            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            if (isset($_COOKIE['user'])) {
                echo"<a href='?ctl=paper&act=formModify&id=" . $data->getIdPaper() . "'><i class='fa fa-pencil-square-o fa-2x colorwhite'></i></a>";
            }
            echo"</div>";
            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            if (isset($_COOKIE['user'])) {
                echo"<a href='?ctl=paper&act=eliminar&id=" . $data->getIdPaper() . "'><i class='fa fa-trash-o fa-2x colorwhite'></i></a>";
            }
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
        }
        echo"</div>";
    }
}

=======
<?php

//session_start();
require_once("controller/function_AutoLoad.php");

function mostrarPapers() {
    $agencia = new agencia("agen");
    $arrayDePapers = $agencia->rebrePapers();
    if (count($arrayDePapers) > 0) {
        echo "<div>";
        foreach ($arrayDePapers as $data) {
            $peli = new pelicula('', '', '', '', '', '', '', '', '', '');
            $peli = $peli->obtenirPelicula($data->getIdPelicula());
            $actor = new actor('', '', '', '', '');
            $actor = $actor->obtenirActor($data->getIdActor());

            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            echo"<div class='panel panel-default text-center'>";

            echo"<div class='panel-danger'>";
            echo"<h4 class='lletrablanca'>";
            echo $peli->getNom();
            echo"</h4>";
            echo"<p class='lletrablanca'>";
            echo $actor->getNom() . " " . $actor->getCognom() . " -> " . $data->getNom();
            echo"</p>";
            echo"<div class='row'>";
            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            if (isset($_COOKIE['user'])) {
                echo"<a href='?ctl=paper&act=formModify&id=" . $data->getIdPaper() . "'><i class='fa fa-pencil-square-o fa-2x colorwhite'></i></a>";
            }
            echo"</div>";
            echo"<div class='col-md-4 col-sm-4 col-lg-4'>";
            if (isset($_COOKIE['user'])) {
                echo"<a href='?ctl=paper&act=eliminar&id=" . $data->getIdPaper() . "'><i class='fa fa-trash-o fa-2x colorwhite'></i></a>";
            }
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
        }
        echo"</div>";
    }
}

>>>>>>> master
?>  