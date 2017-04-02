<?php

require_once("controller/function_AutoLoad.php");

function mostraactor() {
    $actor = new actor('', '', '', '', '');
    $pelicula = new pelicula('', '', '', '', '', '', '', '', '');
    $nifact = $_REQUEST['dni'];
    $actor = $actor->obtenirActor($nifact);
    $papersActor = $pelicula->obtenirPapersActor($actor->getNif());


    echo"<div class = 'main-login main-center espaitop'>";
    echo "<div class = 'text-center '>";
    $imatge = "<img class='rodona3'heigh ='150px' width='150px' src='view/";
    $foto = $actor->getFoto();

    $pathphoto = $imatge . $foto . "'>";
    echo $pathphoto;

    echo"</div>";
    echo"<hr class = 'colorhr'>";
    echo"<div class = 'text-center'>";
    $nom = $actor->getNom();
    $cognom = $actor->getCognom();
    $nifactor = $actor->getNif();
    $genere = $actor->getGenere();
    echo"<h1><b>$nom $cognom</b></h1>";
    echo"</div>";
    echo"<div>";
    echo"<h4>";
    echo $nifactor;
    echo"</h4>";
    echo"</div>";
    echo"<div>";
    echo"<h4>";
    echo $genere;
    echo"</h4>";
    echo"</div>";
    echo"<div>";
    echo"<h3>";
    echo"<b><i  class='fa fa-film'> Pel·lícules</i></b>";
    echo"</h3>";
    for ($i = 0; $i < count($papersActor); $i++) {
        $nomPeliActor = $pelicula->obtenirPelicula($papersActor[$i]->getIdPelicula());
        echo "<b>" .  $nomPeliActor->getNom() . "</b>" . " " . "<i class='fa fa-arrow-right'> " . $papersActor[$i]->getNom() . "</i>" . "<br/><br/>"; // Nom de la peli.
    }
    echo"</div>";
    echo"</div>";
}

?>