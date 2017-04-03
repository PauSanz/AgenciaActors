<?php

require_once("controller/function_AutoLoad.php");

function mostradirector() {
    $director = new director('', '', '', '');
    $pelicula = new pelicula('', '', '', '', '', '', '', '', '');
    $nifdir = $_REQUEST['dni'];
    $director = $director->obtenirDirector($nifdir);
    $pelisdirector = $pelicula->obtenirPeliculaDirector($director->getNif());
    //obtenirPelisDirector

    echo"<div class = 'main-login main-center espaitop'>";
    echo "<div class = 'text-center '>";
    $imatge = "<img class='rodona3' heigh ='150px' width='150px' src='view/";
    $foto = $director->getFoto();

    $pathphoto = $imatge . $foto . "'>";
    echo $pathphoto;

    echo"</div>";
    echo"<hr class = 'colorhr'>";
    echo"<div class = 'text-center'>";
    $nom = $director->getNom();
    $cognom = $director->getCognom();
    $nifdirector = $director->getNif();
    echo"<h1><b>$nom $cognom</b></h1>";
    echo"</div>";
    echo"<div>";
    echo"<h4>";
    echo $nifdirector;
    echo"</h4>";
    echo"</div>";
    echo"<div>";
    echo"<h3>";
    echo"<b><i  class='fa fa-film'> Pel·lícules</i></b>";
    echo"</h3>";
    for ($i = 0; $i < count($pelisdirector); $i++) {
        echo '<b>'.$pelisdirector[$i]->getNom().'</b>' . "<br/>";
    }
    echo"</div>";
    
    echo"</div>";

    
    
    
}

?>